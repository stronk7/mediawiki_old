<?php

class WURFL_Storage_Mwmemcache extends WURFL_Storage_Base {

    private $expiration;
    private $namespace;

    private $defaultParams = array(
        "host" => "127.0.0.1",
        "port" => "11211",
        "namespace" => "wurfl",
        "expiration" => 0
    );

    public function __construct($params=array()) {
		$currentParams = is_array($params) ? array_merge($this->defaultParams, $params) : $this->defaultParams;
        $this->toFields($currentParams);
    }

    private function toFields($params) {
        foreach($params as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * Saves the object.
     *
     * @param string $objectId
     * @param mixed $object
     * @return
     */
    public function save($objectId, $object) {
		global $wgMemc;
		return $wgMemc->set( $this->encode( $this->namespace, $objectId ), $object, $this->expiration );
    }

    public function load($objectId) {
        global $wgMemc;
		$value = $wgMemc->get( $this->encode( $this->namespace, $objectId ) );
        return $value ? $value : null;
    }


    public function clear() {
    }
}
