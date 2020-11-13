<?php
/**
 * ============== Template Name: About Page
 *
 * @package avoriazchalets
 */
get_header();?>


<?php get_template_part('template-parts/timeline');?>
<div class="choose-block mt5">
    <div class="container container__extranarrow narrow-text mb3">
        <h1 class="heading heading__2">Why Choose Us</h1>

    </div>
    <?php get_template_part('template-parts/why-choose-us');?>
</div>

<?php get_template_part('template-parts/map-component');?>
<?php get_template_part('template-parts/footer-cta');?>
<?php get_footer();?>