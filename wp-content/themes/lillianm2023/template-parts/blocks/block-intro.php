<?php 
    $id = 'block-intro-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    $classes = ' block-intro';
    if( !empty($block['className']) ) {
        $classes .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $classes .= ' align-' . $block['align'];
    }
?>
<section id="<?php echo esc_attr($id); ?>" class="intro<?php echo esc_attr($classes); ?>">
    <div class="intro__inner">
        <div class="intro__subhead">
            <span class="intro__subhead-text"><?php the_field('sub_heading'); ?></span>
        </div>
        <?php the_field('content'); ?>
    </div>
</section>