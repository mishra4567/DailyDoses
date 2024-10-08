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
// 05.08.2024 : 01.04
    public function get_menu_id($location){
        // Get all the location
        $locations=get_nav_menu_locations();
        // get object id by location
        $menu_id=$locations[$location];
        // my_prx($menu_id);
        return !empty($menu_id) ? $menu_id :'';

    }
    // get chiled menus 
    public function get_child_menu_items($menu_array, $parent_id){
        $child_menus=[];
        if(!empty($menu_array) && is_array($menu_array)){
            foreach($menu_array as $menu){
                if(intval($menu->menu_item_parent)===$parent_id){
                    array_push($child_menus,$menu);
                }
            }
        }
        return $child_menus;
    }
}