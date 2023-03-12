<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lillianm2023
 */

?>
    <footer class="footer">
        <div class="footer__top">
            <div class="footer__inner">
                <p><?php the_field('footer_text', 'options'); ?></p>
            </div>
        </div>
        <div class="footer__middle">
            <div class="footer__inner">
                <div class="footer__columns">
                    <div class="footer__columns-left">
                    <?php if( have_rows('left_column', 'options') ): ?>
                        <?php while( have_rows('left_column', 'options') ): the_row(); ?>
                        <h6><?php the_sub_field('title'); ?></h6>
                        <span class="footer__columns-hr"></span>
                        <ul>
                            <?php while( has_sub_field('menu') ): ?>
                                <?php $link = get_sub_field('link'); ?>
                                <li><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="scroll-to-anchor"><?php echo html_entity_decode($link['title']); ?></a></li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                    <div class="footer__columns-mid">
                    <?php if( have_rows('middle_column', 'options') ): ?>
                        <div class="footer__images">                            
                        <?php while( have_rows('middle_column', 'options') ): the_row(); ?>
                                
                            <?php while( has_sub_field('images') ): ?>
                            <div class="footer__image">
                                <?php $link = get_sub_field('image_link'); ?>
                                <?php $image = get_sub_field('image'); ?>
                                <?php $size = '115x115'; ?>
                                <?php if($link): ?>
                                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                    <?php if($image): ?>
                                    <?php echo wp_get_attachment_image($image, $size, false, array('alt' => $link['title'])); ?>
                                    <?php endif; ?>
                                    <span class="footer__image-caption"><?php echo $link['title']; ?></span>
                                </a>
                                <?php endif; ?>
                            </div>                 
                            <?php endwhile; ?>           
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="footer__columns-right">
                    <?php if( have_rows('right_column', 'options') ): ?>
                        <?php while( have_rows('right_column', 'options') ): the_row(); ?>
                        <h6><?php the_sub_field('title'); ?></h6>
                        <span class="footer__columns-hr"></span>
                        <p><?php the_sub_field('text'); ?></p>
                        <p>
                        <?php $link = get_sub_field('link'); ?>
                            <?php if($link): ?>
                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                            <?php endif; ?>
                        </p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
                <?php $mid = get_field('middle_column', 'options'); ?>
                <?php $link = $mid['text_link']; ?>
                <?php $new_tab = $mid['open_in_new_tab']; ?>
                <?php $text = $mid['text']; ?>
                <div class="footer__middle-text">
                    <?php if($link): ?>
                    <p><a href="<?php echo $link; ?>" <?php if($new_tab): ?>target="_blank"<?php endif; ?>><?php echo $text; ?></a></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__inner">
            <?php if( have_rows('copy', 'options') ): ?>
                <?php while( have_rows('copy', 'options') ): the_row(); ?>
                <?php $link = get_sub_field('copy_link'); ?>
                <span class="footer__copy"><?php the_sub_field('copy_text'); ?> <?php if($link): ?><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a><?php endif; ?></span>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<?php the_field('svg_icons', 'options'); ?>

</body>
</html>
