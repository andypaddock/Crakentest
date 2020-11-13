<?php $heroImage = get_the_post_thumbnail_url(); ?>


<div class="hero">
    <div class="hero__background background-image" style="background-image: url(<?php echo $heroImage;?>">
    </div>
    <div class="container mt3">
        <div class="row">
            <div class="col-mobile-4 col-desktop-3"></div>
            <div class="col-mobile-12 col-desktop-6">
                <h1 class="heading heading__2"><span>Chalet</span> <?php the_title(); ?></h1>
                <article><?php the_field('hero_copy');?></article>
            </div>
            <div class="col-mobile-4 col-desktop-3 special-wrapper">
                <?php if( get_field('show_special_offer_tab') ): ?>
                <div class="special-offer no-mob">

                    <div class="text">
                        <h2 class="heading heading__4"><?php the_field('offer_icon_text' ,'options');?></h2>
                    </div>
                    <?php $offerImage = get_field('offer_icon', 'options');
 ?>
                    <img src="<?php echo $offerImage['url'];?>" />
                </div>
                <div id="shadow" class="no-mob"></div>
                <?php endif; ?>


            </div>
        </div>

    </div>
</div>