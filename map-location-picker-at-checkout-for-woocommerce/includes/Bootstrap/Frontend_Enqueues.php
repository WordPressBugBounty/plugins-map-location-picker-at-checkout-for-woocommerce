<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://uriahsvictor.com
 * @since      1.0.0
 *
 * @package    Lpac
 * @subpackage Lpac/public
 */
/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Lpac
 * @author     Uriahs Victor <info@soaringleads.com>
 */
namespace Lpac\Bootstrap;

if ( !defined( 'ABSPATH' ) ) {
    exit;
}
use Lpac\Controllers\Map_Visibility_Controller;
use Lpac\Controllers\SiteWide\InlineScriptsController;
use Lpac\Helpers\Functions;
class Frontend_Enqueues {
    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * The full google maps resource with all needed params.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $lpac_google_maps_resource  The google maps url.
     */
    private $lpac_google_maps_resource;

    /**
     * Burst cache if on Local dev environment.
     *
     * @var int
     * @since 1.9.0
     */
    private $maybe_burst_cache;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string $plugin_name       The name of the plugin.
     * @param      string $version    The version of this plugin.
     */
    public function __construct() {
        $this->plugin_name = LPAC_PLUGIN_NAME;
        $this->version = LPAC_VERSION;
        $this->lpac_google_maps_resource = LPAC_GOOGLE_MAPS_API_LINK . LPAC_GOOGLE_MAPS_API_KEY . '&' . LPAC_GOOGLE_MAPS_PARAMS;
        $this->maybe_burst_cache = ( defined( 'LPAC_DEBUG' ) && LPAC_DEBUG ? time() : '' );
    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {
        wp_enqueue_style(
            $this->plugin_name,
            LPAC_PLUGIN_ASSETS_PATH_URL . 'public/css/lpac-public.css',
            array(),
            $this->version . $this->maybe_burst_cache,
            'all'
        );
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {
        $path = ( defined( 'LPAC_DEBUG' ) && LPAC_DEBUG ? '' : 'build/' );
        wp_enqueue_script(
            $this->plugin_name,
            LPAC_PLUGIN_ASSETS_PATH_URL . 'public/js/' . $path . 'lpac-public.js',
            array('jquery', 'wp-util', 'selectWoo'),
            $this->version . $this->maybe_burst_cache,
            true
        );
        /*
         * Site wide Inline scripts
         */
        new InlineScriptsController();
        /**
         * Register Google Map Script
         */
        $map_resource = $this->lpac_google_maps_resource;
        // Make map language filterable and allow adding of extra params to the api link
        $language = apply_filters( 'lpac_map_locale', get_locale() );
        $additional_params = apply_filters( 'lpac_additional_map_params', array(), $map_resource );
        $language_param = array("language={$language}");
        $additional_params = array_merge( $language_param, $additional_params );
        $additional_params_string = '&' . implode( '&', $additional_params );
        $map_resource = $map_resource . $additional_params_string;
        wp_register_script(
            $this->plugin_name . '-google-maps-js',
            $map_resource,
            array(),
            $this->version . $this->maybe_burst_cache,
            false
        );
        // Callback function. The callback parameter is *required* by google maps. It throws a console error if not present.
        wp_add_inline_script( $this->plugin_name . '-google-maps-js', "\n\t\t\tfunction GMapsScriptLoaded(){\n\t\t\tconsole.log('Location Picker at Checkout: Maps API Script loaded');\n\t\t\t}\n\t\t", 'before' );
        // Only enqueue the Google Map CDN script on the needed pages
        if ( is_wc_endpoint_url( 'view-order' ) || is_wc_endpoint_url( 'order-received' ) || is_checkout() ) {
            $show_on_view_order_page = Map_Visibility_Controller::lpac_show_map( 'lpac_display_map_on_view_order_page' );
            if ( is_wc_endpoint_url( 'view-order' ) && $show_on_view_order_page === false ) {
                return;
            }
            $show_on_order_received_page = Map_Visibility_Controller::lpac_show_map( 'lpac_display_map_on_order_received_page' );
            if ( is_wc_endpoint_url( 'order-received' ) && $show_on_order_received_page === false ) {
                return;
            }
            // Enqueue our Google Maps script.
            wp_enqueue_script( $this->plugin_name . '-google-maps-js' );
            /**
             * The following javascript files have to be enqueued in the footer so our wp_add_inline_script() function can work.
             */
            /*
             * Base Map JS, also enqueues google maps JS automatically.
             */
            wp_enqueue_script(
                $this->plugin_name . '-base-map',
                LPAC_PLUGIN_ASSETS_PATH_URL . 'public/js/maps/' . $path . 'base-map.js',
                array($this->plugin_name . '-google-maps-js'),
                $this->version . $this->maybe_burst_cache,
                true
            );
            /**
             * Load order received page map
             */
            if ( is_wc_endpoint_url( 'order-received' ) ) {
                wp_enqueue_script(
                    $this->plugin_name . '-order-received-map',
                    LPAC_PLUGIN_ASSETS_PATH_URL . 'public/js/maps/' . $path . 'order-received-map.js',
                    array($this->plugin_name . '-base-map'),
                    $this->version . $this->maybe_burst_cache,
                    true
                );
            }
            /**
             * Load view order page map (customer)
             */
            if ( is_wc_endpoint_url( 'view-order' ) ) {
                wp_enqueue_script(
                    $this->plugin_name . '-order-details-map',
                    LPAC_PLUGIN_ASSETS_PATH_URL . 'public/js/maps/' . $path . 'order-details-map.js',
                    array($this->plugin_name . '-base-map'),
                    $this->version . $this->maybe_burst_cache,
                    true
                );
            }
            /**
             * is_checkout() also runs on is_wc_endpoint_url( 'order-received' ) so we need to also check that we're not on the order received page.
             */
            if ( is_checkout() && !is_wc_endpoint_url( 'order-received' ) ) {
                /**
                 * Load checkout page map
                 */
                wp_enqueue_script(
                    $this->plugin_name . '-checkout-page-map',
                    LPAC_PLUGIN_ASSETS_PATH_URL . 'public/js/maps/' . $path . 'checkout-page-map.js',
                    array($this->plugin_name . '-base-map', 'wp-util', 'selectWoo'),
                    $this->version . $this->maybe_burst_cache,
                    true
                );
            }
        }
        // Set a global var to determine if this is the pro version.
        // Altering this line in free version won't make a difference since we've already stripped pro code from free version.
        $is_premium = json_encode( lpac_fs()->can_use_premium_code() );
        wp_add_inline_script( $this->plugin_name . '-checkout-page-map', "window.lpacCanUsePremiumCode = {$is_premium}", 'before' );
    }

    /**
     * Turn a script into a module so that we can make use of JS components.
     *
     * @param string $tag
     * @param string $handle
     * @param string $src
     * @return string
     * @since 1.7.0
     */
    public function getScriptsAsModules( string $tag, string $handle, string $src ) : string {
        if ( LPAC_DEBUG === false ) {
            // Live scripts are built in Parcel so no need to make them modules.
            return $tag;
        }
        $kikote_handles = array(
            $this->plugin_name . '-checkout-page-map-pro',
            $this->plugin_name . '-checkout-page-map',
            $this->plugin_name . '-map-builder',
            $this->plugin_name . '-base-map',
            $this->plugin_name . '-order-details-map',
            $this->plugin_name . '-order-received-map',
            $this->plugin_name
        );
        if ( !in_array( $handle, $kikote_handles, true ) ) {
            return $tag;
        }
        return Functions::makeScriptsModules( $tag, $handle, $src );
    }

}
