<?php 
    $id = 'block-contact-form-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }

    $classes = ' block-contact-form';
    if( !empty($block['className']) ) {
        $classes .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $classes .= ' align-' . $block['align'];
    }
?>
<section id="<?php echo esc_attr($id); ?>" class="contact-form<?php echo esc_attr($classes); ?>">
    <div class="contact-form__inner">
        <div class="contact-form__columns">
        <?php if( have_rows('contact_details') ): ?>
            <?php while( have_rows('contact_details') ): the_row(); ?>
            <div class="contact-form__details">
                <h2 class="contact-form__h2"><?php the_sub_field('heading'); ?></h2>
                <span class="contact-form__image">
                    <?php $image = get_sub_field('image'); ?>
                    <?php $size = '180x252'; ?>
                    <?php if($image): ?>
                        <?php echo wp_get_attachment_image( $image, $size, false, array('alt' => get_sub_field('heading')) ); ?>
                    <?php endif; ?>
                </span>
                <p><?php the_sub_field('contact_text'); ?></p>
                <div class="contact-form__subdetails">
                    <span class="contact-form__h6"><?php the_sub_field('sub_heading'); ?></span>
                    <span class="contact-form__hr"></span>
                    <a href="tel:<?php preg_replace("/[^0-9]/", "", get_sub_field('phone') ); ?>" class="contact-form__phone"><?php the_sub_field('phone'); ?></a>
                    <span class="contact-form__address"><?php the_sub_field('address'); ?><br>
                        <?php $link = get_sub_field('address_link'); ?>
                        <?php if($link): ?>
                        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="contact-form__map"><?php echo $link['title']; ?></a>
                        <?php endif; ?>
                    </span>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if( have_rows('form') ): ?>
            <?php while( have_rows('form') ): the_row(); ?>
            <div class="contact-form__form">
                <div class="contact-form__form-inner">
                    <span class="contact-form__form-subhead"><?php the_sub_field('sub_heading'); ?></span>
                    <h4><?php the_sub_field('heading'); ?></h4>

                    <?php echo do_shortcode('[gravityform id="'. get_sub_field('select_form') .'" title="false" description="false" ajax="true"]'); ?>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>