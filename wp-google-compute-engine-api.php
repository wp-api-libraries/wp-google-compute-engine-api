<?php
/**
 * WP Google Cloud Compute Engine API
 *
 * @link https://cloud.google.com/compute/docs/reference/latest/
 * @package WP-API-Libraries\WP-Cloud-Compute-Engine-API
 */
/*
* Plugin Name: WP Cloud Compute Engine API
* Plugin URI: https://github.com/wp-api-libraries/wp-google-compute-engine-api
* Description: Perform API requests to Google Cloud Compute Engine in WordPress.
* Author: WP API Libraries
* Version: 1.0.2
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-google-compute-engine-api
* GitHub Branch: master
*/
/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'GoogleCloudComputeEngineAPI' ) ) {
	
	/**
	 * GoogleCloudComputeEngineAPI Class.
	 */
	class GoogleCloudComputeEngineAPI {
		
		/**
		 * BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 'https://cloudfunctions.googleapis.com';
		
		/* AcceleratorTypes. */
		
		/* Addresses. */
		
		/* Autoscalers. */
		
		/* BackendBuckets. */
		
		/* BackendServices. */
		
		/* DiskTypes. */
		
		
		/* Disks. */
		
		/* Firewalls. */
		
		/* ForwardingRules. */
		
		/* GlobalAddresses. */
		
		/* GlobalForwardingRules. */
		
		/* GlobalOperations. */
		
		/* HealthChecks. */
		
		/* HttpHealthChecks. */
		
		/* HttpsHealthChecks. */
		
		/* Images. */
		
		/* InstanceGroupManagers. */

	}
	
}