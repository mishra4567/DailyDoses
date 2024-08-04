<?php
/**
 * 27.07.2024:00.07
 * Enqueue theme assets 
 *  *  *  *  *  * // dailyDoses
 * // DAILYDOSES
 * @package DailyDoses
 */
namespace DAILYDOSES_THEME\Inc;

use DAILYDOSES_THEME\Inc\Traits\Singleton;

class Assets{
    use Singleton;
    //coped to class-dailyDoses-theme.php start
    protected function __construct()
    {
        //loaded or not
        // wp_die('hallo');
        //load class.
        $this->setup_hooks();
    }
    protected function setup_hooks()
    {
        //actions and filters
        //26.7.2024:11.51
        /**
         * Add action 
         * style and js
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }
    public function register_styles()
    {
        // Register Styles.
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(DAILYDOSES_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', DAILYDOSES_DIR_URI . '/assets/css/bootstrap.min.css', [], false, 'all');
        // Enqueue Styles.
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    }
    public function register_scripts()
    {
        // Register Scripts.
        wp_register_script('main-js', DAILYDOSES_DIR_URI . '/assets/js/main.js', [], filemtime(DAILYDOSES_DIR_PATH . '/assets/js/main.js'), true);
        wp_register_script('bootstrap-js', DAILYDOSES_DIR_URI . '/assets/js/bootstrap.min.js', ['jquery'], false, true);
        // Enqueue Scripts.
        wp_enqueue_script('jquery'); // Ensure jQuery is enqueued first.
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
    //coped to class-dailyDoses-theme.php end
}