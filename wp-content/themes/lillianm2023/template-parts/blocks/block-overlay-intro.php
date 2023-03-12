<?php 
    $id = 'block-overlay-intro-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    $classes = ' block-overlay-intro';
    if( !empty($block['className']) ) {
        $classes .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $classes .= ' align-' . $block['align'];
    }
?>
<section id="<?php echo esc_attr($id); ?>" class="bg-overlay<?php echo esc_attr($classes); ?>">
    <div class="bg-overlay__image"> 
        <?php $bg = get_field('image'); ?>
        <?php $size = '1441x626'; ?>
        <?php if($bg): ?>
            <?php echo wp_get_attachment_image( $bg, $size, false, array('alt' => get_field('sub_heading')) ); ?>
        <?php endif; ?>
    </div>
    <div class="bg-overlay__cta">
        <div class="bg-overlay__cta-inner">
            <div class="bg-overlay__cta-submark">
                <?php $submark = get_field('submark'); ?>
                <?php $size = '90x90'; ?>
                <?php if($submark): ?>
                    <?php echo wp_get_attachment_image( $submark, $size, false, array('alt' => get_field('sub_heading'), 'class' => 'submark__image--spin') ); ?>
                <?php endif; ?>
            </div>
            <div class="bg-overlay__cta-content">
                <span class="bg-overlay__cta-subhead"><?php the_field('sub_heading'); ?></span>
                <?php the_field('content'); ?>
                <?php $button = get_field('button'); ?>
                <?php if($button): ?>
                <a href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>" class="button button--gray hover--dark-gray"><?php echo $button['title']; ?> <span class="icon-arrow icon-arrow--gray"></span></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>