<?php
/**
 * 04.08.2024
 * Register Menus 
 *  *  *  *  * // dailyDoses
 * // DAILYDOSES
 * @package DailyDoses
 */
namespace DAILYDOSES_THEME\Inc;

use DAILYDOSES_THEME\Inc\Traits\Singleton;

class Menus{
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
         * Menus
         */
        add_action('init', [$this, 'register_menus']);
    }
    public function register_menus(){
        register_nav_menus([
            'dailyDoses-header-menu'=> esc_html__('Header Menu','dailyDoses'),
            'dailyDoses-footer-menu'=> esc_html__('Footer Menu','dailyDoses'),
        ]);
    }
    //coped to class-assets.php end
}