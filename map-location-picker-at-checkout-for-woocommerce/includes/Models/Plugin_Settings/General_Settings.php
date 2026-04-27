<?php
/**
 * Get the general settings of the plugin.
 *
 * Author:          Uriahs Victor
 * Created on:      22/01/2023 (d/m/y)
 *
 * @link    https://uriahsvictor.com
 * @since   1.6.13
 * @package Models
 */

namespace Lpac\Models\Plugin_Settings;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Lpac\Models\Base_Model;

/**
 * Class responsible for retrieving general settings of plugin.
 *
 * @package Lpac\Models\Plugin_Settings
 * @since 1.6.13
 */
class General_Settings extends Base_Model {

	/**
	 * Check if the force use of map feature is enabled.
	 *
	 * @return bool
	 * @since 1.8.6
	 */
	public static function forceUseOfMapEnabled(): bool {
		$value = get_option( 'lpac_force_map_use', false );
		return filter_var( $value, FILTER_VALIDATE_BOOLEAN );
	}

	// ------------- Places Auto Complete -------------/
	/**
	 * Get setting that forces user to make use of the places auto complete feature.
	 *
	 * @return bool
	 * @since 1.6.13
	 */
	public static function get_force_use_places_autocomplete_setting(): bool {
		return filter_var( get_option( 'lpac_force_places_autocomplete' ), FILTER_VALIDATE_BOOLEAN );
	}

	/**
	 * Whether to use places autocomplete (new) api.
	 *
	 * @return bool
	 * @since 1.11.0
	 */
	public static function getUseNewPlacesAutocompleteSetting(): bool {
		return filter_var( get_option( 'lpac_use_new_places_autocomplete_api' ), FILTER_VALIDATE_BOOLEAN );
	}

	/**
	 * Get the text for the force autocomplete feature.
	 *
	 * @return string
	 * @since 1.6.13
	 */
	public static function get_force_places_autocomplete_notice_text(): string {
		return get_option( 'lpac_force_places_autocomplete_notice_text', '' );
	}

	/**
	 * Get the fields that places autocomplete should be attached to.
	 *
	 * @return array
	 * @since 1.11.0
	 */
	public static function getPlacesAutocompleteFields(): array {
		return get_option( 'lpac_places_autocomplete_fields', array() );
	}

	/**
	 * Check if the places autocomplete feature is enabled.
	 *
	 * @return bool
	 * @since 1.8.6
	 */
	public static function isPlacesAutoCompleteEnabled(): bool {
		$value = get_option( 'lpac_enable_places_autocomplete' );
		return filter_var( $value, FILTER_VALIDATE_BOOLEAN );
	}

	// ------------- Places Autocomplete -------------/
}
