<?php
/*
Plugin Name: Custom API Logger
Description: Logs API requests to a file for monitoring unusual activity.
Version: 1.0
Author: Razel Ahmed
*/
if ( ! defined('ABSPATH') ) {
  exit;
}

class Rz_Custom_Api_Logger {
  public function __construct() {
    add_action('init', array( $this,'init') );
  }
  public function init() {
    add_filter('rest_pre_serve_request', array( $this, 'log_rest_api_requests'), 10, 3 );
  }

  public function log_rest_api_requests( $result, $server, $request ) {
    // Define the log file path
    $log_file = ABSPATH . 'wp-content/api-request-log.txt';

    // Check if the file is writable or can be created
    if (is_writable(dirname($log_file))) {
        // Get request data
        $endpoint = $request->get_route();
        $method = $request->get_method();
        $timestamp = date("Y-m-d H:i:s");

        // Log the data
        $log_entry = "$timestamp - $method - $endpoint\n";
        file_put_contents($log_file, $log_entry, FILE_APPEND);
    } else {
        error_log('API log file is not writable: ' . $log_file);
    }

    return $result;
  }

}
// Instantiate the class
new Rz_Custom_Api_Logger();