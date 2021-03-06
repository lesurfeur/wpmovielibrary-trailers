<?php
/**
 * 
 * 
 * 
 * @package   WPMovieLibrary-Trailers
 * @author    Charlie MERLAND <charlie.merland@gmail.com>
 * @license   GPL-3.0
 * @link      http://www.caercam.org/
 * @copyright 2014 CaerCam.org
 */

if ( class_exists( 'TMDb' ) && ! class_exists( 'WPMOLYTR_Api' ) ) :

	/**
	 * Extends Class for WPML Api Class
	 * 
	 * Adds a getTrailers() method to the default WPMovieLibrary TMDb Api Class.
	 * 
	 * @since    1.0
	 */
	class WPMOLYTR_Api extends TMDb
	{

		/**
		 * Default constructor
		 */
		public function __construct() {

			if ( ! is_admin() )
				return false;

			$this->api_key  = wpmoly_o( 'api-key' );
			$this->scheme   = wpmoly_o( 'api-scheme' );
			$this->internal = wpmoly_o( 'api-internal' );

			if ( '' == $this->api_key )
				$this->internal = true;
		}

		/**
		 * Retrieve movie trailers
		 *
		 * @param    mixed    $id TMDb-id or IMDB-id
		 * @param    mixed    $lang Filter the result with a language
		 * 
		 * @return   array    TMDb result 
		 */
		public function getTrailers( $id, $lang ) {

			$params = array( 'language' => is_null( $lang ) ? wpmoly_o( 'api-language' ) : $lang );
			return $this->_makeCall( "movie/{$id}/trailers", $params );
		}

		/**
		 * Retrieve movie videos
		 *
		 * @param    mixed    $id TMDb-id or IMDB-id
		 * @param    mixed    $lang Filter the result with a language
		 * 
		 * @return   array    TMDb result 
		 */
		public function getVideos( $id, $lang ) {

			$params = array( 'language' => is_null( $lang ) ? wpmoly_o( 'api-language' ) : $lang );
			return $this->_makeCall( "movie/{$id}/videos", $params );
		}
	}

endif;