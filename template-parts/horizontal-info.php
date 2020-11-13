<div class="info-wrapper mt5 mb5">

    <!--FLEXIBLE CONTENT START  -->
    <div class="jq-tab-wrapper" id="horizontalTab">
        <div class="jq-tab-menu container container__full">
            <?php if( have_rows('tabbed_content') ): ?>
            <?php while( have_rows('tabbed_content') ): the_row(); ?>
            <?php if( get_row_layout() == 'prop_gallery' ): ?>
            <div class="jq-tab-title" data-tab="gallery"><?php the_sub_field('tab_heading_gall'); ?></div>
            <?php elseif( get_row_layout() == 'property_video' ):?>
            <div class="jq-tab-title no-mob" data-tab="video"><?php the_sub_field('tab_heading_vid'); ?></div>
            <?php elseif( get_row_layout() == 'layout_image' ):?>
            <div class="jq-tab-title no-mob" data-tab="layout"><?php the_sub_field('tab_heading_lay'); ?></div>
            <?php elseif( get_row_layout() == 'description' ):?>
            <div class="jq-tab-title" data-tab="description"><?php the_sub_field('tab_header_desc'); ?></div>
            <?php elseif( get_row_layout() == 'seasons_pricing_block' ):?>
            <div class="jq-tab-title" data-tab="rates"><?php the_sub_field('tab_heading_price'); ?></div>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="jq-tab-content-wrapper">
            <div>

                <?php if( have_rows('tabbed_content') ): ?>
                <?php while( have_rows('tabbed_content') ): the_row(); ?>
                <?php if( get_row_layout() == 'prop_gallery' ): ?>
                <div class="jq-tab-content" data-tab="gallery">
                    <div class="container container__full">
                        <?php get_template_part('template-parts/gallery');?>
                    </div>
                </div>
                <?php elseif( get_row_layout() == 'property_video' ):?>
                <div class="jq-tab-content" data-tab="video">
                    <?php $propertyVideo = get_sub_field('video_upload');
                    $videoPlaceholder = get_sub_field('video_placeholder');?>
                    <video controls muted poster="<?php echo $videoPlaceholder['url'];?>" id="propvideo" width="x"
                        height="y">
                        <source src="<?php echo $propertyVideo['url'];?>" type="video/mp4">
                    </video>
                </div>
                <?php elseif( get_row_layout() == 'layout_image' ):?>
                <div class="jq-tab-content" data-tab="layout">
                    <div class="container container__full">

                        <a class="image-popup" href="<?php the_sub_field('layout_image'); ?>">
                            <img src="<?php the_sub_field('layout_image'); ?>">
                        </a>

                    </div>
                </div>
                <?php elseif( get_row_layout() == 'description' ):?>
                <div class="jq-tab-content" data-tab="description">
                    <div class="container container__narrow40 text-block">
                        <?php the_sub_field('description'); ?>
                    </div>
                </div>
                <?php elseif( get_row_layout() == 'seasons_pricing_block' ):?>
                <div class="jq-tab-content" data-tab="rates">
                    <?php get_template_part('template-parts/chalet-pricing-table');?>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <?php $footerImage = get_field('footer_background_image', 'options');?>

            <div class="container container__narrow60">
                <div class="property-add cta-block mb5 mt5"
                    style="background-image: url(<?php echo $footerImage['url'];?>"
                    title="<?php echo $footerImage['title'];?>" alt="<?php echo $footerImage['alt'];?>">
                    <h1 class="heading heading__1"><?php the_field('footer_cta_text', 'options');?></h1>
                    <a href="<?php the_field('footer_cta_target', 'options');?>">
                        <?php the_field('footer_cta_button', 'options');?><i class="fas fa-chevron-right"></i>
                    </a>

                </div>
            </div>


        </div>
    </div>
</div>