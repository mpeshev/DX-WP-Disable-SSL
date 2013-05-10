<?php
/**
 * Plugin Name: DX WP Disable SSL
 * Description: Local configuration for disabling SSL HTTPS verification in the process of development. Must not be deployed on production servers.
 */

add_filter('https_local_ssl_verify', '__return_false');
add_filter('https_ssl_verify', '__return_false');
