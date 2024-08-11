<?php
// dailyDoses
// DAILYDOSES
use DAILYDOSES_THEME\Inc\DAILYDOSES_THEME;

/**
 * Theme Functions.
 * 
 * @package DailyDoses
 * 25.2024
 */
// my function

function my_pr($arr)
{
    echo '<pre>';
    print_r($arr);
};
function my_prx($arr)
{
    echo '<pre>';
    print_r($arr);
    die();
};
/*
function get_safe_value($con, $str){
    if ($str != ""){
        $str = trim($str);
        return strip_tags(mysqli_real_escape_string($con, $str));
    };
};
*/
// end my function

// 26.07.2024 Start
if (!defined('DAILYDOSES_DIR_PATH')) {
    define('DAILYDOSES_DIR_PATH', untrailingslashit(get_template_directory()));
}
//27.07.2024:00.00
if (! defined('DAILYDOSES_DIR_URI')) {
    define('DAILYDOSES_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
// to print data 
// my_prx(DAILYDOSES_DIR_PATH);
require_once DAILYDOSES_DIR_PATH . '/inc/helpers/autoloader.php';
// 10.08.2024 : 12.24
require_once DAILYDOSES_DIR_PATH . '/inc/helpers/template-tags.php';
// 10.08.2024 : 12.24

function dailyDoses_get_theme_instance(){
    \DAILYDOSES_THEME\Inc\DAILYDOSES_THEME::get_instance();
}
// !importent that the class init
if ( class_exists( '\DAILYDOSES_THEME\Inc\Meta_Boxes' ) ) {
    \DAILYDOSES_THEME\Inc\Meta_Boxes::get_instance();
}

dailyDoses_get_theme_instance();
// 26.07.2024 End
function dailyDoses_enqueue_scripts()
{

}

add_action('wp_enqueue_scripts', 'dailyDoses_enqueue_scripts');
