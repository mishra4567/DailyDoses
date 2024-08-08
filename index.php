<?php

/**
 * Main template file
 * 
 * @package DailyDoses
 * 
 */

get_header();
?>
<!-- 06.08.2024 : 01.17 -->
<div class="" id="primary">
    <main id="main" class="site-main mt-5" role="main">
        <!-- 08.08.2024 : 21.15 Start-->
        <?php if (have_posts()) : ?>
            <!-- 08.08.2024 : 21.15 end-->
            <div class="container">
                <?php if (is_home() &&  ! is_front_page()) { ?>
                    <header class="mb-5">
                        <h1 class="page-title "><?php single_post_title(); ?></h1>
                    </header>
                <?php } ?>
                <div class="row">
                    <?php
                    $index = 0;
                    $no_of_columns = 3;
                    //case index = 0;
                    // startthe loop
                    while (have_posts()): the_post();
                        if (0 === $index % $no_of_columns) {
                    ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <?php } ?>
                            <!-- 08.08.2024 : 21.15 Start-->
                            <?php get_template_part('template-parts/content') ?>
                            <!-- 08.08.2024 : 21.15 end-->

                            <?php
                            $index++;
                            if (0 !== $index && 0 === $index % $no_of_columns) {
                            ?>
                            </div>
                    <?php
                            }
                        endwhile;
                    ?>
                </div>
            </div>
            <!-- 08.08.2024 : 21.15 Start-->
        <?php
        else:
            get_template_part('template-parts/content-none');
        endif;
        // get_template_part('template-parts/content-none');
         ?>
        <!-- 08.08.2024 : 21.15 end-->
    </main>
</div>
<!-- <div class="content">
    <?php
    //  esc_html_e('Content Index','dailyDoses'); 
    ?>
</div> -->
<?php
get_footer();
?>