<?php
/**
 * Handles shortcodes related logic .
 *
 * description.
 *
 * Author:          Uriahs Victor
 * Created on:      09/09/2022 (d/m/y)
 *
 * @link    https://uriahsvictor.com
 * @since   1.6.4
 * @package Controllers
 */
namespace Lpac\Controllers;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Class Shortcodes.
 */
class Shortcodes {

	/**
	 * Save the store location ID that the customer selected from the dropdown.
	 *
	 * @return void
	 */
	public function saveSelectedStoreLocation(): void {

		$store_id = $_REQUEST['store_location_id'] ?? '';
		$store_id = sanitize_text_field( $store_id );

		if ( empty( $store_id ) ) {
			wp_send_json( 'Kikote: Empty store location ID' );
		}

		update_user_meta( get_current_user_id(), 'lpac_user_preferred_store_location_id', $store_id );

		wp_send_json_success();
	}
}
