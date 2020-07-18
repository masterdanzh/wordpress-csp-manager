<?php
/**
 * The core plugin
 *
 * @package CSP_Manager
 */

namespace CSP_Manager;

defined('ABSPATH') || die('No script kiddies please!');

/**
 * The CSP core class
 * @since 1.0.0
 */
class Core {

    /**
	 * Set up actions and hooks
     * 
     * @since 1.0.0
     * @param string $pluginfile __FILE__ path to the main plugin file.
	 */
	public function __construct($pluginfile) {
		if(is_admin() && !wp_doing_ajax()) {
            require_once __DIR__ . '/Settings.php';
        
            $settings = new Settings($pluginfile);
        }

        add_action('init',array($this, 'csp_init'));
    }

    /**
     * Output CSP headers in init
     * 
     * @since 1.0.0
     */
    public function csp_init() {
        if (is_admin()) {
            // Admin
        } elseif (is_user_logged_in()) {
            // Logged-in
        } else {
            // Frontend
        }
    }

}