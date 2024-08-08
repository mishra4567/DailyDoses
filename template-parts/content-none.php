<!-- 08.08.2024 : 21.15 Start-->
<?php
/**
 * Template part for displaying a massage that posts connot be found
 * 
 * @package DailyDoses
 * 
 */
?>
<section class="no-result not-found">
    <header>
        <h1 class="title"><?php esc_html_e('Nothing Found','dailyDoses') ?></h1>
    </header>
    <div class="page-content">
        <?php 
        if(is_home() && current_user_can('publish_posts')){
            ?>
                <p>
                    <?php printf(
                        wp_kses(
                            __('Ready to publish your first post? <a href="%s">Get started here</a>','dailyDoses'),[
                                'a'=>[
                                    'href'=>[]
                                ]
                            ]
                                ),esc_url(admin_url('post-new.php'))
                    ) ?>
                </p>
            <?php
        }elseif(is_search()){
            ?>
            <p><?php esc_html_e('Sorry but nothing your search item, Plase try again with some defferent keywords','dailyDoses') ?></p>
            <?php
            get_search_form();
        }else{  ?>
            <p><?php esc_html_e('It seems that we cannot find what you are looking for. Perhaps search can help','dailyDoses') ?></p>
            <?php
            get_search_form();
        }
        ?>
    </div>
</section>
<!-- 08.08.2024 : 21.15 end-->