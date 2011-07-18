<?php

/**
 * This class is used to build a category tree and manipulate it.
 * It currently supports building the tree from a list of categories.
 * You can then disable categories by id and request a list of
 * enabled categories and subcategories. This is useful for selecting
 * pages by categories and their subcategories without specifying the
 * subcategories.
 * @author fhackenberger
 */
class CategoryTreeManip {
	
	var $root;
	var $name;
	var $id;
	var $catPageIdToNode = array();
	var $parents = array();
	var $enabled = true;
	var $children = array();
	
	/**
	 * Constructor
	 */
	function __construct($id = NULL, $name = NULL, $root = NULL, $parents = array()) {
		$this->id = $id;
		$this->name = $name;
		if(!is_null($root)) {
			$this->root = $root;
		}else {
			$this->root = $this;
		}
		$this->parents = $parents;
	}
	
	private function addChildren($children) {
		if(!is_array($children))
			throw new Exception('Argument must be an array');
		foreach($children as $child) {
			$this->children[$child->id] = $child;
		}
	}
	
	private function addParents($parents) {
		if(!is_array($parents))
			throw new Exception('Argument must be an array');
		foreach($parents as $parent) {
			$this->parents[$parent->id] = $parent;
		}
	}
	
	/** Disable this category node and all subcategory nodes
	 * @return
	 */
	public function disable() {
		$this->recursiveDisable();
	}
	
	/** Disable the given categories (by id) and all their subcategories
	 * 
	 * @param array $catPageIds The page ids of the categories to disable
	 * @return
	 */
	public function disableCategoryIds($catPageIds) {
		foreach($catPageIds as $catId) {
			$node = $this->getNodeForCatPageId($catId);
			if(isset($node)) {
				$node->disable();
			}
		}
	}
	
	private function recursiveDisable($visitedNodeIds = array()) {
		if(!$this->enabled || array_key_exists($this->id, $visitedNodeIds))
			return; # Break the recursion
		$this->enabled = false;
		$visitedNodeIds[] = $this->id;
		foreach($this->children as $cat) {
			$cat->recursiveDisable($visitedNodeIds);
		} 
	}
	
	/** Returns a list of enables category names, including
	 * all subcategories.
	 * 
	 * @return array An array of category names
	 */
	public function getEnabledCategoryNames() {
		$enabledNodes = $this->getEnabledNodeMap();
		$enabledCategories = array();
		foreach($enabledNodes as $nodeId => $node) {
			$enabledCategories[] = $node->name;
		}
		return $enabledCategories;
	}
	
	/** Returns a map of enabled categories, including
	 * all subcategories.
	 * 
	 * @return array An array mapping from category page ids to CategoryTreeManip objects
	 */
	public function getEnabledNodeMap() {
		return $this->root->recursiveGetEnabledNodeMap();
	}
	
	private function recursiveGetEnabledNodeMap(&$foundNodes = array()) {
		if(isset($this->id)) {
			if(!$this->enabled || array_key_exists($this->id, $foundNodes))
				return $foundNodes; # Break the recursion
			$foundNodes[$this->id] = $this;
		}
		foreach($this->children as $cat) {
			$cat->recursiveGetEnabledNodeMap($foundNodes);
		}
		return $foundNodes;
	}
	
	/** Returns a CategoryTreeManip node, given a category page id
	 * 
	 * @param $catPageId The page id of the category to retrieve
	 * @return CategoryTreeManip The node
	 */
	public function getNodeForCatPageId($catPageId) {
		if(array_key_exists($catPageId, $this->root->catPageIdToNode))
			return $this->root->catPageIdToNode[$catPageId];
	}
	
	private function addNode($node) {
		$this->root->catPageIdToNode[$node->id] = $node;
	}
	
	/** Build the category tree, given a list of category names.
	 * All categories and subcategories are enabled by default.
	 * 
	 * @param array $catNames An array of strings representing category names
	 * @return
	 */
	public function initialiseFromCategoryNames($catNames) {
		$dbr = wfGetDB( DB_SLAVE );
		while($catNames) {
			$res = $dbr->select( array('categorylinks', 'page' ), # Tables
				array('cl_to AS parName', 'cl_from AS childId', 'page_title AS childName'), # Fields
				array('cl_to' => $catNames, 'page_namespace' => NS_CATEGORY),  # Conditions
				__METHOD__, array(),
				 # Join conditions
				array('page' => array('JOIN', 'page_id = cl_from') )
			);
			$parentList = array();
			$childList = array();
			while( $row = $res->fetchObject() ) {
				$parentList[$row->parName][] = array($row->childId, $row->childName);
				if(array_key_exists($row->childId, $childList)) {
					$childEntry = $childList[$row->childId];
					$childEntry[1][] = $row->parName;
				}else {
					$childList[$row->childId] = array($row->childName, array($row->parName));
				}
			}
			$dbr->freeResult( $res );
			
			if(!isset($parentNameToNode) && !empty($parentList)) {
				// Fetch the page ids of the $catNames and add the parent categories if needed
				$res = $dbr->select( array('page' ), # Tables
					array('page_id, page_title'), # Fields
					array('page_title' => array_keys($parentList))  # Conditions
				);
				$parentNameToNode = array();
				while( $row = $res->fetchObject() ) {
					$node = $this->getNodeForCatPageId($row->page_id);
					if(!isset($node)) {
						$node = new CategoryTreeManip($row->page_id, $row->page_title, $this->root);
						$this->addNode($node);
						$this->addChildren(array($node));
					}
					$parentNameToNode[$row->page_title] = $node;
				}
				$dbr->freeResult( $res );
			}
			
			$newChildNameToNode = array();
			// Add the new child nodes
			foreach($childList as $childPageId => $childInfo) {
				$childNode = $this->getNodeForCatPageId($childPageId);
				if(!isset($childNode)) {
					$childNode = new CategoryTreeManip($childPageId, $childInfo[0], $this->root);
					$this->addNode($childNode);
					$newChildNameToNode[$childInfo[0]] = $childNode;
				}
				foreach($childInfo[1] as $parentName) {
					$parent = $parentNameToNode[$parentName];
					$parent->addChildren(array($childNode));
					$childNode->addParents(array($parent));
				}
			}
			
			// Prepare for the next loop
			$parentNameToNode = $newChildNameToNode;
			$catNames = array_keys($parentNameToNode);
		}
	}
}
