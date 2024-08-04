<?php
/**
 *  * // dailyDoses
 * // DAILYDOSES
 * @package DailyDoses
 * 25.07.2024
 */
namespace DAILYDOSES_THEME\Inc\Traits;
trait Singleton{
    public function __construct(){

    }
    // 26.07.2024
    public function __clone(){

    }
    final public static function get_instance(){
        static $instance=[];

        $called_class=get_called_class();
        if(!isset($instance[$called_class])){
            $instance[$called_class]=new $called_class();
            do_action(sprintf('dailyDoses_theme_singleton_init%s',$called_class));
        }
        return $instance[$called_class];
    }
// 26.07.2024 end

}