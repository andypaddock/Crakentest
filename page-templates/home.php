<?php
/**
 * ============== Template Name: Home Page
 *
 * @package avoriazchalets
 */
get_header();?>
<?php get_template_part('template-parts/site-wide-special');?>
<?php get_template_part('template-parts/special-offers');?>
<?php get_template_part('template-parts/double-links');?>
<div class="choose-block mt5">
    <div class="container container__extranarrow narrow-text mb3">
        <h1 class="heading heading__2">Why Choose Us</h1>

    </div>
    <?php get_template_part('template-parts/why-choose-us');?>
</div>
<div class="other-properties mt5">
    <div class="container container__full">
        <h4 class="heading heading__2">Avoriaz Properties</h4>
    </div>
    <div class="container mt5">
        <?php get_template_part('template-parts/home-property-feed-av');?>
    </div>

</div>
<div class="mt5 mb5">
    <?php get_template_part('template-parts/map-component');?>
</div>
<div class="int-properties mt5 mb5">
    <div class="container container__full">
        <h4 class="heading heading__2"><?php the_field('international_property_feed_title', 'options');?></h4>
        <p class="int-lead"><?php the_field('international_property_text', 'options');?></p>

    </div>
    <div class="container mt5">
        <?php get_template_part('template-parts/home-feed-int');?>
    </div>
    <div class="container container__full mt5 mb5">
        <div class="avail-link"><a href="<?php the_field('intfeed_cta_target', 'options');?>">
                <?php the_field('intfeed_cta_button', 'options');?><i class="fas fa-chevron-right"></i>
            </a></div>
    </div>

</div>
<?php get_template_part('template-parts/testimonials');?>
<?php get_template_part('template-parts/footer-cta');?>

<?php get_footer();?>