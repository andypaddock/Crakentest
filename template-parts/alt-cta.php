<?php $altImage = get_field('alt_background_image');?>
<div class="footer-cta footer__background background-image" style="background-image: url(<?php echo $altImage['url'];?>"
    title="<?php echo $altImage['title'];?>" alt="<?php echo $altImage['alt'];?>">
    <div class="container">
        <div class="row">
            <div class="col-desktop-3 col-mobile-12">
                <h1 class="heading heading__1"><?php the_field('alt_cta_text');?></h1>
                <a href="<?php the_field('alt_cta_target');?>">
                    <?php the_field('alt_cta_button_text');?><i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>