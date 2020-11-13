<?php
/**
 * ============== Template Name: Gallery Page
 *
 * @package avoriazchalets
 */
get_header();?>

<div class="container container__full content">
    <?php get_template_part('template-parts/filtered-gallery');?>
</div>
<?php get_template_part('template-parts/footer-cta');?>
<?php get_footer();?>