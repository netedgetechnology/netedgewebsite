<?php
/**
 * Plugin Name: HappyHive Child Care Subsidy Calculator
 * Plugin URI: https://happyhive.com.au
 * Description: A comprehensive child care subsidy calculator that helps families estimate their out-of-pocket costs for child care services in Australia.
 * Version: 1.0.0
 * Author: HappyHive
 * Author URI: https://happyhive.com.au
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: happyhive-subsidy-calculator
 * Domain Path: /languages
 * Requires at least: 5.0
 * Tested up to: 6.4
 * Requires PHP: 7.4
 * Network: false
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('HAPPYHIVE_CALCULATOR_VERSION', '1.0.0');
define('HAPPYHIVE_CALCULATOR_PLUGIN_URL', plugin_dir_url(__FILE__));
define('HAPPYHIVE_CALCULATOR_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('HAPPYHIVE_CALCULATOR_PLUGIN_BASENAME', plugin_basename(__FILE__));

/**
 * Main Plugin Class
 */
class HappyHive_Subsidy_Calculator {
    
    /**
     * Single instance of the class
     */
    private static $instance = null;
    
    /**
     * Get single instance
     */
    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Constructor
     */
    private function __construct() {
        add_action('init', array($this, 'init'));
        register_activation_hook(__FILE__, array($this, 'activate'));
        register_deactivation_hook(__FILE__, array($this, 'deactivate'));
    }
    
    /**
     * Initialize plugin
     */
    public function init() {
        // Load text domain
        load_plugin_textdomain('happyhive-subsidy-calculator', false, dirname(HAPPYHIVE_CALCULATOR_PLUGIN_BASENAME) . '/languages');
        
        // Enqueue scripts and styles
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
        
        // Add shortcode
        add_shortcode('happyhive_calculator', array($this, 'calculator_shortcode'));
        
        // Add admin menu
        add_action('admin_menu', array($this, 'add_admin_menu'));
        
        // Add settings
        add_action('admin_init', array($this, 'register_settings'));
        
        // Add AJAX handlers
        add_action('wp_ajax_save_calculator_data', array($this, 'save_calculator_data'));
        add_action('wp_ajax_nopriv_save_calculator_data', array($this, 'save_calculator_data'));
    }
    
    /**
     * Enqueue JavaScript files
     */
    public function enqueue_scripts() {
        if ($this->should_load_assets()) {
            wp_enqueue_script('jquery');
            wp_enqueue_script(
                'happyhive-calculator',
                HAPPYHIVE_CALCULATOR_PLUGIN_URL . 'assets/js/subsidy-calculator.js',
                array('jquery'),
                HAPPYHIVE_CALCULATOR_VERSION,
                true
            );
            
            // Localize script for AJAX
            wp_localize_script('happyhive-calculator', 'happyhive_ajax', array(
                'ajax_url' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('happyhive_calculator_nonce'),
                'strings' => array(
                    'loading' => __('Loading...', 'happyhive-subsidy-calculator'),
                    'error' => __('An error occurred. Please try again.', 'happyhive-subsidy-calculator'),
                    'success' => __('Data saved successfully!', 'happyhive-subsidy-calculator')
                )
            ));
        }
    }
    
    /**
     * Enqueue CSS files
     */
    public function enqueue_styles() {
        if ($this->should_load_assets()) {
            wp_enqueue_style(
                'happyhive-calculator',
                HAPPYHIVE_CALCULATOR_PLUGIN_URL . 'assets/css/calculator-styles.css',
                array(),
                HAPPYHIVE_CALCULATOR_VERSION
            );
        }
    }
    
    /**
     * Check if assets should be loaded
     */
    private function should_load_assets() {
        global $post;
        
        // Load on pages with the shortcode
        if (is_a($post, 'WP_Post') && has_shortcode($post->post_content, 'happyhive_calculator')) {
            return true;
        }
        
        // Load on admin pages
        if (is_admin()) {
            return true;
        }
        
        return false;
    }
    
    /**
     * Calculator shortcode
     */
    public function calculator_shortcode($atts) {
        $atts = shortcode_atts(array(
            'title' => __('Child Care Subsidy Estimator', 'happyhive-subsidy-calculator'),
            'show_header' => 'true',
            'show_navigation' => 'true'
        ), $atts);
        
        ob_start();
        include HAPPYHIVE_CALCULATOR_PLUGIN_PATH . 'templates/calculator.php';
        return ob_get_clean();
    }
    
    /**
     * Add admin menu
     */
    public function add_admin_menu() {
        add_options_page(
            __('HappyHive Calculator Settings', 'happyhive-subsidy-calculator'),
            __('HappyHive Calculator', 'happyhive-subsidy-calculator'),
            'manage_options',
            'happyhive-calculator',
            array($this, 'admin_page')
        );
    }
    
    /**
     * Register settings
     */
    public function register_settings() {
        register_setting('happyhive_calculator_settings', 'happyhive_calculator_options');
    }
    
    /**
     * Admin page
     */
    public function admin_page() {
        include HAPPYHIVE_CALCULATOR_PLUGIN_PATH . 'admin/settings.php';
    }
    
    /**
     * Save calculator data via AJAX
     */
    public function save_calculator_data() {
        // Verify nonce
        if (!wp_verify_nonce($_POST['nonce'], 'happyhive_calculator_nonce')) {
            wp_die(__('Security check failed', 'happyhive-subsidy-calculator'));
        }
        
        // Sanitize and save data
        $data = array(
            'user_location' => sanitize_text_field($_POST['user_location']),
            'indigenous' => sanitize_text_field($_POST['indigenous']),
            'family_income' => intval($_POST['family_income']),
            'activity_hours' => intval($_POST['activity_hours']),
            'child_count' => intval($_POST['child_count']),
            'children_data' => array_map('sanitize_text_field', $_POST['children_data']),
            'timestamp' => current_time('mysql')
        );
        
        // Save to database or send email
        $this->process_calculator_data($data);
        
        wp_send_json_success(array(
            'message' => __('Data saved successfully!', 'happyhive-subsidy-calculator')
        ));
    }
    
    /**
     * Process calculator data
     */
    private function process_calculator_data($data) {
        // You can implement saving to database, sending emails, etc.
        // For now, we'll just log it
        error_log('HappyHive Calculator Data: ' . print_r($data, true));
        
        // Optional: Send email notification
        $admin_email = get_option('admin_email');
        $subject = __('New Calculator Submission', 'happyhive-subsidy-calculator');
        $message = __('A new calculation has been submitted:', 'happyhive-subsidy-calculator') . "\n\n";
        $message .= print_r($data, true);
        
        wp_mail($admin_email, $subject, $message);
    }
    
    /**
     * Plugin activation
     */
    public function activate() {
        // Create database table if needed
        $this->create_database_table();
        
        // Set default options
        $default_options = array(
            'default_income' => 85000,
            'enable_email_notifications' => true,
            'email_recipient' => get_option('admin_email'),
            'show_disclaimer' => true,
            'disclaimer_text' => __('This is an estimate only. Actual subsidies may vary based on individual circumstances.', 'happyhive-subsidy-calculator')
        );
        
        add_option('happyhive_calculator_options', $default_options);
        
        // Flush rewrite rules
        flush_rewrite_rules();
    }
    
    /**
     * Plugin deactivation
     */
    public function deactivate() {
        // Flush rewrite rules
        flush_rewrite_rules();
    }
    
    /**
     * Create database table for storing submissions
     */
    private function create_database_table() {
        global $wpdb;
        
        $table_name = $wpdb->prefix . 'happyhive_calculator_submissions';
        
        $charset_collate = $wpdb->get_charset_collate();
        
        $sql = "CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            user_location varchar(255),
            indigenous varchar(10),
            family_income int,
            activity_hours int,
            child_count int,
            children_data longtext,
            submission_date datetime DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";
        
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}

// Initialize the plugin
HappyHive_Subsidy_Calculator::get_instance();

/**
 * Helper function to get plugin options
 */
function happyhive_get_calculator_options() {
    return get_option('happyhive_calculator_options', array());
}

/**
 * Helper function to get plugin option
 */
function happyhive_get_calculator_option($key, $default = '') {
    $options = happyhive_get_calculator_options();
    return isset($options[$key]) ? $options[$key] : $default;
}
