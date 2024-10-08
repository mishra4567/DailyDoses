<?php

/**
 * Header Template.
 * 
 * @package DailyDoses.
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    };
    ?>
    <div class="site" id="page">
        <!-- get_template_part("This is for include page") -->
         <!-- 24.07.2024 -->
        <?php get_template_part('template-parts\header\nav'); ?>
        </header>
        <div class="site-content" id="content">

