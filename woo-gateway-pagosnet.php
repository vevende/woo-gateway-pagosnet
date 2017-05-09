<?php
/**
 * Plugin Name: Woo Gateway PagosNet
 * Description: Payment Gateway for PagosNet in Woocommerce
 * Version: 1.0.0
 * Author: Vevende SRL
 * Author URI: https://www.vevende.com/
 *
 * @package WC_Gateway_PagosNet
 * @version 4.0.0
 * @category Gateway
 * @author Vevende SRL
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once dirname( __FILE__ ) . '/includes/autoload.php';

add_action( 'plugins_loaded', 'woo_gateway_pagosnet' );

function woo_gateway_pagosnet() {
	PagosNetPlugin::initialize();
}
