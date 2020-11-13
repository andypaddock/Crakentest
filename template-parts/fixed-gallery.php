<?php 
$images = get_field('gallery_fixed');
$counter = 0;
$galleryCount = get_field('select_gallery_size');

if( $images && $counter < $galleryCount) : ?>
<div class="parent parent__<?php echo ($galleryCount); ?>">

    <?php foreach( $images as $image ):
            $counter++; ?>
    <?php if( $counter <= $galleryCount) : ?>
    <div class="div<?php echo ($counter); ?> slow-fade gallery-images"><a href="<?php echo $image['url']; ?>"
            class="lightbox-gallery" alt="<?php echo $image['alt']; ?>"
            style="background-image: url(<?php echo $image['url']; ?>)"></a>
        <div class="image-meta">
            <div class="caption"><?php echo wp_trim_words($image['caption'], 2, '...'); ?></div>
            <div class="sharer">
                <a target="_blank" class="share-btn hidden pinterest"
                    href='//pinterest.com/pin/create/link/?url=<?php the_permalink();?>&amp;media=<?php echo $image['url']; ?>&amp;description=<?php the_title();?>'><i
                        class="fab fa-pinterest"></i></a>
                <a class="share-btn share" href='#'><i class="fas fa-share-alt"></i></a>
            </div>

        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
</div>
<?php endif; ?>