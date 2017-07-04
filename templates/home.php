<?php /* Template Name: Strona główna */ ?>

<?php get_header(); ?>

    <?php get_template_part("partials/section", "slider"); ?>

    <?php get_template_part("partials/section", "intro"); ?>

    <?php get_template_part("partials/section", "servicesTop"); ?>

    <?php get_template_part("partials/section", "equipment"); ?>

    <?php get_template_part("partials/section", "cta"); ?>

    <?php get_template_part("partials/section", "promo"); ?>

    <?php get_template_part("partials/section", "map"); ?>

<?php get_footer(); ?>