<?php

/**
 * 11.08.2024 | 00.24
 * Copyed to class-assets.php
 */
/**
 * 27.07.2024:00.07
 * Register Meta Boxes
 *  *  *  *  *  * // dailyDoses
 * // DAILYDOSES
 * @package DailyDoses
 */

namespace DAILYDOSES_THEME\Inc;

use DAILYDOSES_THEME\Inc\Traits\Singleton;

class Meta_Boxes
{
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
         * Action.
         */
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box']);
    }
    public function add_custom_meta_box()
    {
        $screens = [ 'post' ];
        foreach ( $screens as $screen ) {
            add_meta_box(
                'hide-page-title',      //Unique ID
                __( 'Hide page title', 'dailyDoses' ),    //Box title
                [ $this, 'custom_meta_box_html' ],         // Content callback, must be of type callable
                $screen,                            // Post type
                'side'                              // context
            );
        }
    }
    public function custom_meta_box_html( $post )
    {
        $value = get_post_meta( $post->ID, '_hide_page_title', true );
        /**
         * Use nonce for verification.
         * This will create a hidden input field with id and name as
         * 'hide_title_meta_box_nonce_name' and unique nonce input value.
         */
        wp_nonce_field( plugin_basename(__FILE__), 'hide_title_meta_box_nonce_name' );
?>
        <label for="dailyDoses-field"><?php esc_html_e( 'Hide the page title', 'dailyDoses' ) ?></label>
        <select name="dailyDoses_hide_title_field" id="dailyDoses-field" class="postbox">
            <option value=""><?php esc_html_e( 'Select', 'dailyDoses' ) ?></option>
            <option value="yes" <?php selected( $value, 'yes' ) ?>><?php esc_html_e( 'Yes', 'dailyDoses' ) ?></option>
            <option value="no" <?php selected( $value, 'no' ) ?>><?php esc_html_e( 'No', 'dailyDoses' ) ?></option>
        </select>
<?php
    }
}
/**
 * 11.08.2024 | 00.24
 * Copyed to class-assets.php end
 */
