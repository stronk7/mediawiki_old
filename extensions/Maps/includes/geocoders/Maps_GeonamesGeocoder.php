<?php

/**
 * Class for geocoding requests with the GeoNames webservice.
 * 
 * @since 0.8
 * @file Maps_GeonamesGeocoder.php
 * @ingroup Maps
 * @ingroup Geocoders
 *
 * @licence GNU GPL v3
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
final class MapsGeonamesGeocoder extends MapsGeocoder {
	
	/**
	 * Registeres the geocoder.
	 * 
	 * No LSB in pre-5.3 PHP *sigh*.
	 * This is to be refactored as soon as php >=5.3 becomes acceptable.
	 * 
	 * @since 0.8
	 */
	public static function register() {
		global $egMapsGeoNamesUser;
		
		if ( $egMapsGeoNamesUser != '' ) {
			MapsGeocoders::registerGeocoder( 'geonames', __CLASS__ );
		}
		
		return true;
	}	
	
	/**
	 * @see MapsGeocoder::getRequestUrl
	 * 
	 * @since 0.8
	 * 
	 * @param string $address
	 * 
	 * @return string
	 */	
	protected function getRequestUrl( $address ) {
		global $egMapsGeoNamesUser;
		return 'http://api.geonames.org/search?q=' . urlencode( $address ) . '&maxRows=1&username=' . urlencode( $egMapsGeoNamesUser );
	}
	
	/**
	 * @see MapsGeocoder::parseResponse
	 * 
	 * @since 0.8
	 * 
	 * @param string $address
	 * 
	 * @return array
	 */		
	protected function parseResponse( $response ) {
		$lon = self::getXmlElementValue( $response, 'lng' );
		$lat = self::getXmlElementValue( $response, 'lat' );

		// In case one of the values is not found, return false.
		if ( !$lon || !$lat ) return false;

		return array(
			'lat' => $lat,
			'lon' => $lon
		);		
	}
	
}