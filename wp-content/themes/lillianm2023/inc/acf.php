<?php

add_theme_support('align-wide');
function load_custom_wp_admin_style() {
    wp_enqueue_style('admin-style', get_template_directory_uri() . '/admin-style.css', array(), _S_VERSION);
    wp_enqueue_style('lillianm2023-fonts', 'https://use.typekit.net/aeb7ybq.css', _S_VERSION );
    wp_enqueue_style('gform_basic-css', WP_PLUGIN_URL . '/gravityforms/css/basic.min.css', array(), _S_VERSION);
    //wp_enqueue_script('admin-script', get_template_directory_uri() . '/js/admin.js', array(), _S_VERSION);
}
add_action('acf/input/admin_enqueue_scripts', 'load_custom_wp_admin_style');

function custom_block_categories($categories, $post) {
    return array_merge(
        $categories,
        array(
            array(
                'slug'  => 'acf-custom-blocks',
                'title' => __('Custom Blocks', 'acf'),
            ),
        )
    );
}
add_filter('block_categories', 'custom_block_categories', 10, 2);

function register_blocks() {

    // check function exists
    if (function_exists('acf_register_block')) {

        // Hero slider
        acf_register_block_type(array(
            'name'              => 'hero-slider',
            'title'             => __('Hero Slider'),
            'description'       => __('hero slider.'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/block-home-slider.php',
            'category'          => 'acf-custom-blocks',
            'icon'              => 'layout',
            'mode'              => 'auto',
            'keywords'          => array('hero, carousel, slider')
        ));

        // Intro
        acf_register_block_type(array(
            'name'              => 'intro',
            'title'             => __('Intro'),
            'description'       => __('Intro content'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/block-intro.php',
            'category'          => 'acf-custom-blocks',
            'icon'              => 'layout',
            'mode'              => 'auto',
            'keywords'          => array('intro, content')
        ));

        // Product Callout CTAs
        acf_register_block_type(array(
            'name'              => 'product-callout',
            'title'             => __('Product Callout'),
            'description'       => __('Product callout ctas and intro text'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/block-product-callout.php',
            'category'          => 'acf-custom-blocks',
            'icon'              => 'layout',
            'mode'              => 'auto',
            'keywords'          => array('product, callout, cta')
        ));

        // Overlay Intro CTA
        acf_register_block_type(array(
            'name'              => 'overlay-intro-cta',
            'title'             => __('Overlay Intro CTA'),
            'description'       => __('Overlay intro cta'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/block-overlay-intro.php',
            'category'          => 'acf-custom-blocks',
            'icon'              => 'layout',
            'mode'              => 'auto',
            'keywords'          => array('overlay, intro, content, cta')
        ));

        // Contact Form
        acf_register_block_type(array(
            'name'              => 'contact-form',
            'title'             => __('Contact Form'),
            'description'       => __('Contact form'),
            'render_template'   => get_template_directory() . '/template-parts/blocks/block-contact-form.php',
            'category'          => 'acf-custom-blocks',
            'icon'              => 'layout',
            'mode'              => 'auto',
            'keywords'          => array('contact, form')
        ));

    }    
}
add_action('acf/init',  __NAMESPACE__ . '\\register_blocks');
