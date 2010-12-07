/* JavaScript */

$j( document ).ready( function() {
	
	var currentViewID = 'fundraiserstats-view-box-0';
	function replaceView( newLayerID ) {
		var currentLayer = document.getElementById( currentViewID );
		var newLayer = document.getElementById( newLayerID );
		currentLayer.style.display = 'none';
		newLayer.style.display = 'block';
		currentViewID = newLayerID;
	}
	
	var currentChartID = 'fundraiserstats-chart-totals';
	function replaceChart( newLayerID ) {
		var currentLayer = document.getElementById( currentChartID );
		var currentTab = document.getElementById( currentChartID + '-tab' );
		var newLayer = document.getElementById( newLayerID );
		var newTab = document.getElementById( newLayerID + '-tab' );
		currentLayer.style.display = 'none';
		currentTab.setAttribute( 'class', 'fundraiserstats-chart-tab-normal' );
		newLayer.style.display = 'block';
		newTab.setAttribute( 'class', 'fundraiserstats-chart-tab-current' );
		currentChartID = newLayerID;
	}

	$j( '.fundraiserstats-bar' ).hover( function() {
		replaceView( $j(this).attr( 'rel' ) )
	} );
	$j( '.fundraiserstats-chart-tab' ).click( function() {
		replaceChart( $j(this).attr( 'rel' ) )
	} );
	$j( '.fundraiserstats-current' ).each( function() {
		replaceView( $j(this).attr( 'rel' ) )
	} );
} );
