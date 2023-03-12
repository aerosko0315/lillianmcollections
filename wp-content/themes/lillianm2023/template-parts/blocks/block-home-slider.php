<?php 
    $id = 'block-hero-slider-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    $classes = ' block-hero-slider';
    if( !empty($block['className']) ) {
        $classes .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $classes .= ' align-' . $block['align'];
    }
?>
<section id="<?php echo esc_attr($id); ?>" class="hero-slider<?php echo esc_attr($classes); ?>">
    <div class="hero-slider__inner">
        <?php if( have_rows('hero_slider') ): ?>
        <div class="hero-slider__items js-hero-slider">
            <?php while( have_rows('hero_slider') ) : the_row(); ?>
            <div class="hero-slider__item<?php if(get_row_index() == 1): ?> active<?php endif; ?>">
                <?php $image = get_sub_field('image'); ?>
                <?php $size = '1531x900'; ?>
                <?php if( $image ): ?>
                    <?php echo wp_get_attachment_image( $image, $size, false, array('alt' => get_sub_field('title')) ); ?>
                <?php endif; ?>
                <div class="hero-slider__item-inner">
                    <div class="hero-slider__caption">
                        <h1><?php the_sub_field('title'); ?></h1>
                        <?php $button = get_sub_field('button'); ?>
                        <?php if($button): ?>
                        <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="button button--gray"><span><?php echo $button['title']; ?></span> <span class="icon-arrow icon-arrow--gray"></span></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="hero-slider__dots">
            <div class="hero-slider__dots-inner js-hero-slider-dots"></div>
        </div>
        <?php endif; ?>
    </div>
    <?php $submark = get_field('submark'); ?>
    <?php $size = '180x180'; ?>
    <?php $attr = array('class' => 'submark__image--spin', 'alt' => get_bloginfo( 'name' )); ?>
    <?php if($submark): ?>
    <div class="submark">
        <div class="submark__inner">
            <div class="submark__image">
                <?php echo wp_get_attachment_image( $submark, $size, false, $attr ); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>