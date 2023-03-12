<?php
/**
 * Template Name: Home 
 */

get_header();
?>

    <main>

        <section class="hero-slider">
            <div class="hero-slider__inner">
                <div class="hero-slider__items js-hero-slider">
                    <div class="hero-slider__item active">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/lillian-m-collection-95731721-lifestyle-images.jpg.jpg" alt="">
                        <div class="hero-slider__item-inner">
                            <div class="hero-slider__caption">
                                <h1>Tk Product Title or Shop Category Headline</h1>
                                <a href="#" class="button button--gray"><span>TK Shop CTA Here</span> <span class="icon-arrow icon-arrow--gray"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slider__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/_lillian-m-collection-95731721-lifestyle-images.jpg.jpg" alt="">
                        <div class="hero-slider__item-inner">
                            <div class="hero-slider__caption">
                                <h1>Tk Engagement rings & wedding bands Headline</h1>
                                <a href="#" class="button button--gray"><span>TK Shop CTA Here</span> <span class="icon-arrow icon-arrow--gray"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slider__dots">
                    <div class="hero-slider__dots-inner js-hero-slider-dots"></div>
                </div>
            </div>
            <div class="submark">
                <div class="submark__inner">
                    <div class="submark__image">
                        <img class="submark__image--spin" src="<?php echo get_template_directory_uri(); ?>/images/svg/submark-big.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="intro">
            <div class="intro__inner">
                <div class="intro__subhead">
                    <span class="intro__subhead-text">Tk intro section subhead</span>
                </div>
                <h2>Tk introductory text describing the <i>brand new jewelry collection</i> from Walters Hospitality. Describe what jewelry types or styles are available and who they are marketed towards. Also mention any standout qualities or attributes that are signature to the brand.</h2>
                <p>Tk body text if needed to add more keywords and description of the brand, how Walters became a part of it, and any other details you can think of. Lorem ipsum dolor sit amet porta ligula. Sociis natoque penatibus cras nullam et magnis dis parturient.</p>
            </div>
        </section>

        <section class="product-callout">    
            <div class="product-callout__inner">       
                <div class="product-callout__card product-callout__card--vertical-small">
                    <a href="#" class="product-callout__card-link">
                        <span class="product-callout__card-caption">Tk Product Name</span>
                        <div class="product-callout__card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Small Vertical Image.jpg" alt="">
                            <span class="product-callout__card-title">Shop<br>Product Name</span>
                        </div>
                    </a>
                </div>
                <div class="product-callout__card product-callout__card--vertical-large">
                    <a href="#" class="product-callout__card-link">
                        <span class="product-callout__card-caption">Tk Product Name One<br/>
                            Tk Product Name Two<br/>
                            Tk Product Name Three<br/>
                            Tk Product Name Four</span>
                        <div class="product-callout__card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Large Vertical Image.jpg" alt="">
                            <span class="product-callout__card-title">Shop<br>Engagement Rings</span>
                        </div>
                    </a>
                </div>                
                <div class="product-callout__intro">
                    <span class="product-callout__subhead">Exquisite</span>
                    <h3>Tk Shop the collection Headline</h3>
                    <p>Tk short description leading to the online shop below.</p>
                    <a href="#" class="button button--white">Tk shop CTA here <span class="icon-arrow icon-arrow--gray"></span></a>
                </div>     
                <div class="product-callout__card product-callout__card--square-small">
                    <a href="#" class="product-callout__card-link">
                        <span class="product-callout__card-caption">Tk Product Name</span>
                        <div class="product-callout__card-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/lillian-m-collection-95307416-year-of-the-wedding.jpg" alt="">
                            <span class="product-callout__card-title">Shop<br>Wedding Rings</span>
                        </div>
                    </a>
                </div>        
            </div> 
        </section>

        <section class="bg-overlay">
            <div class="bg-overlay__image"> 
                <img 
                    class="image--desktop" 
                    src="<?php echo get_template_directory_uri(); ?>/images/lillian-m-collection-101908326-engagement-rings-beauty-images-mobile.jpg.jpg"
                    srcset="<?php echo get_template_directory_uri(); ?>/images/lillian-m-collection-101908326-engagement-rings-beauty-images.jpg.jpg 576w" 
                    alt=""
                />
            </div>
            <div class="bg-overlay__cta">
                <div class="bg-overlay__cta-inner">
                    <div class="bg-overlay__cta-submark">
                        <img  class="submark__image--spin" src="<?php echo get_template_directory_uri(); ?>/images/svg/submark-small.svg" alt=""> 
                    </div>
                    <div class="bg-overlay__cta-content">
                        <span class="bg-overlay__cta-subhead">Tk appointment subhead</span>
                        <h4>Tk Schedule An Appointment here headline</h4>
                        <p>Tk short body text introducing the ability to book an appointment online via the link below.</p>
                        <a href="#" class="button button--gray hover--dark-gray">Tk Book now cta <span class="icon-arrow icon-arrow--gray"></span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-form">
            <div class="contact-form__inner">
                <div class="contact-form__columns">
                    <div class="contact-form__details">
                        <h2 class="contact-form__h2">Contact Us</h2>
                        <span class="contact-form__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/contact-img.jpg" alt="">
                        </span>
                        <p>Tk brief body text describing how The Olana is their temporary location available for pickups, lead into information below.</p>
                        <div class="contact-form__subdetails">
                            <span class="contact-form__h6">Location + Contact</span>
                            <span class="contact-form__hr"></span>
                            <a href="#" class="contact-form__phone">(000) 000-0000</a>
                            <span class="contact-form__address">The Olana, Hickory Creek<br>
                                1851 Turbeville Road<br>
                                Hickory Creek, TX 75065<br>
                                <a href="" class="contact-form__map">View Google Map</a>
                            </span>
                        </div>
                    </div>
                    <div class="contact-form__form">
                        <div class="contact-form__form-inner">
                            <span class="contact-form__form-subhead">Tk Form Subhead</span>
                            <h4>Tk Fill out the form to Inquire now hed</h4>

                            <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();