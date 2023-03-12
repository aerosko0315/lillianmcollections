<?php 
    $id = 'block-product-callout-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    $classes = ' block-product-callout';
    if( !empty($block['className']) ) {
        $classes .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $classes .= ' align-' . $block['align'];
    }
?>
<section id="<?php echo esc_attr($id); ?>" class="product-callout<?php echo esc_attr($classes); ?>">    
    <div class="product-callout__inner">       
    <?php if( have_rows('product_cta_1') ): ?>
        <?php while( have_rows('product_cta_1') ): the_row(); ?>
        <div class="product-callout__card product-callout__card--vertical-small">
            <?php $url = get_sub_field('cta_url'); ?>
            <a href="<?php echo $url; ?>" class="product-callout__card-link">
                <span class="product-callout__card-caption"><?php the_sub_field('caption'); ?></span>
                <div class="product-callout__card-image">
                    <?php $image = get_sub_field('image'); ?>
                    <?php $size = '200x279'; ?>
                    <?php if($image): ?>
                        <?php echo wp_get_attachment_image( $image, $size, false, array('alt' => get_sub_field('title')) ); ?>
                    <?php endif; ?>
                    <span class="product-callout__card-title"><?php the_sub_field('title'); ?></span>
                </div>
            </a>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php if( have_rows('product_cta_2') ): ?>
        <?php while( have_rows('product_cta_2') ): the_row(); ?>
        <div class="product-callout__card product-callout__card--vertical-large">
            <?php $url = get_sub_field('cta_url'); ?>
            <a href="<?php echo $url; ?>" class="product-callout__card-link">
                <span class="product-callout__card-caption"><?php the_sub_field('caption'); ?></span>
                <div class="product-callout__card-image">
                    <?php $image = get_sub_field('image'); ?>
                    <?php $size = '320x402'; ?>
                    <?php if($image): ?>
                        <?php echo wp_get_attachment_image( $image, $size, false, array('alt' => get_sub_field('title')) ); ?>
                    <?php endif; ?>
                    <span class="product-callout__card-title"><?php the_sub_field('title'); ?></span>
                </div>
            </a>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>  
    <?php if( have_rows('callout_intro') ): ?>
        <?php while( have_rows('callout_intro') ): the_row(); ?>
        <div class="product-callout__intro">
            <span class="product-callout__subhead"><?php the_sub_field('sub_heading'); ?></span>
            <?php the_sub_field('content'); ?>
            <?php $button = get_sub_field('button'); ?>
            <?php if($button): ?>
            <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="button button--white"><?php echo $button['title']; ?> <span class="icon-arrow icon-arrow--gray"></span></a>
            <?php endif; ?>
        </div>     
        <?php endwhile; ?>
    <?php endif; ?>  
    <?php if( have_rows('product_cta_3') ): ?>
        <?php while( have_rows('product_cta_3') ): the_row(); ?>
        <div class="product-callout__card product-callout__card--square-small">
            <?php $url = get_sub_field('cta_url'); ?>
            <a href="<?php echo $url; ?>" class="product-callout__card-link">
                <span class="product-callout__card-caption"><?php the_sub_field('caption'); ?></span>
                <div class="product-callout__card-image">
                    <?php $image = get_sub_field('image'); ?>
                    <?php $size = '260x260'; ?>
                    <?php if($image): ?>
                        <?php echo wp_get_attachment_image( $image, $size, false, array('alt' => get_sub_field('title')) ); ?>
                    <?php endif; ?>
                    <span class="product-callout__card-title"><?php the_sub_field('title'); ?></span>
                </div>
            </a>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>         
    </div> 
</section>