<!-- 08.08.2024 : 21.15 Start-->
<?php
/**
 * Content template 
 * 
 * @package DailyDoses
 * 
 */
?>
<!-- 08.08.2024 : 21.15 end-->
 <!-- 10.08.24 : 11.41 -->
  <article id="post-<?php the_ID(); ?> <?php post_class('mb-5'); ?>">
    <?php
     get_template_part('template-parts/components/blog/entry-header');
     get_template_part('template-parts/components/blog/entry-meta');
     get_template_part('template-parts/components/blog/entry-content');
     get_template_part('template-parts/components/blog/entry-footer');
    ?>
  </article>