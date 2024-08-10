<?php

/**
 * Bootstrap the theme.
 *  *  *  * // dailyDoses
 * // DAILYDOSES
 * @package DailyDoses
 * 
 */
// 26.07.2024 start
namespace DAILYDOSES_THEME\Inc;

use DAILYDOSES_THEME\Inc\Traits\Singleton;

class DAILYDOSES_THEME
{
    use Singleton;
    protected function __construct()
    {
        //loaded or not
        // wp_die('hallo');
        //load class.
        // 27.07.2024:00.15
        Assets::get_instance();
        // 04.08.2024 Start
        Menus::get_instance();
        // 04.08.2024 End
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
        // 27.07.2024:00.23
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }
    // 27.07.2024:00.25
    public function setup_theme()
    {
        add_theme_support('title-tag');
        //27.07.2024:00.34
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ]);
        // 27.07.2024:0055
        add_theme_support('custom-background', [
            'default-color' => 'ffff',
            'default-image' => '',
            'default-repeat' => 'no-repeat',
        ]);
        // 04.08.2024
        add_theme_support('post-thumbnails');
        /**
         * 11.08.2024 | 00.01
         * Register image size.
         */
        add_image_size('featured-thumbnail',350,233,true);
        /**
         * 11.08.2024 | 00.01 end
         * 
         */
        add_theme_support('automatic-feed-links');
        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            ]
        );
        add_editor_style();
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');
        global $content_width;
        if (! isset($content_width)) {
            $content_width = 1240;
        }
    }
}
