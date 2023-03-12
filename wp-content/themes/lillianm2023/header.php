<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lillianm2023
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lillianm2023' ); ?></a>

	<header class="header">
	<?php if( have_rows('announcement_bar', 'options') ): ?>
		<?php while( have_rows('announcement_bar', 'options') ): the_row(); ?>
		<div class="header__announcement-bar">
			<?php $url = get_sub_field('url'); ?>
			<a <?php if($url): ?>href="<?php echo $url; ?>"<?php endif; ?><?php if( get_sub_field('open_link_in_new_tab') ): ?> target="_blank"<?php endif; ?>>
				<?php the_sub_field('text'); ?>
			</a>
			<span class="header__announcement-bar--close js-close-bar">
				<svg class="icon-close-small"> <use xlink:href="#icon-close-small"></use> </svg>
			</span>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
		<div class="header__menu header__menu--desktop">
			<div class="header__menu-inner">			
				<div class="header__menu-left">
				<?php if( have_rows('social_media', 'options') ): ?>
					<?php while( have_rows('social_media', 'options') ): the_row(); ?>
					<div class="header__social">
						<span class="header__social-icon"><?php the_sub_field('logo'); ?></span>
						<span class="header__social-text"><?php the_sub_field('text'); ?></span>
						<?php $link = get_sub_field('social_link'); ?>
						<?php if($link): ?>
						<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="header__social-link"><?php echo $link['title']; ?></a>
						<?php endif; ?>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
				</div>
				<div class="header__menu-center">
					<div class="header__navigation">
					<?php if( have_rows('navigation', 'options') ): ?>
						<?php while( have_rows('navigation', 'options') ): the_row(); ?>
						<ul class="header__navigation-ul">
							<?php $menu = get_sub_field('menu'); ?>
							<?php $half = count($menu) / 2; ?>
							<?php $count = 1; ?>
							<?php while( has_sub_field('menu') ): ?>
								<?php $link = get_sub_field('link'); ?>
								<?php if($link): ?>
									<li><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo html_entity_decode($link['title']); ?></a></li>
								<?php endif; ?>
								<?php if( $count == floor($half) ): ?>
									<li class="header-logo">
										<a href="<?php echo site_url(); ?>">
											<svg class="logo-white"> <use xlink:href="#logo-white"></use> </svg>
											<svg class="logo-black"> <use xlink:href="#logo-black-small"></use> </svg>
										</a>
									</li>
								<?php endif; ?>
								<?php $count++; ?>
							<?php endwhile; ?>
						</ul>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
				<div class="header__menu-right">
				<?php if( have_rows('contact', 'options') ): ?>
					<?php while( have_rows('contact', 'options') ): the_row(); ?>
					<div class="header__contact">
						<p class="header__contact-text"><?php the_sub_field('text'); ?></p>
						<p class="header__contact-text--sticky"><?php the_sub_field('text_mobile'); ?></p>
						<?php $link = get_sub_field('link'); ?>
						<?php if($link): ?>
						<span class="arrow">
							<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
							<span class="icon-arrow icon-arrow--white"></span>
							<span class="icon-arrow icon-arrow--gray"></span>
						</span>
						<?php endif; ?>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>			
		</div>
		<div class="header__menu header__menu--mobile">
			<div class="header__menu-inner header__mobile-menu">
				<div class="header__mobile-menu-left">
					<?php $social = get_field('social_media', 'options'); ?>
					<?php $link = $social['social_link']; ?>
					<?php if($link): ?>
					<a href="<?php echo $link['title']; ?>" target="<?php echo $link['target']; ?>" class="header__mobile-menu-link"><?php echo $link['title']; ?></a>
					<?php endif; ?>
					<a href="<?php echo site_url(); ?>" class="header__mobile-menu-logo-sticky"><svg class="logo-black"> <use xlink:href="#logo-black-small"></use> </svg></a>
				</div>
				<div class="header__mobile-menu-right">
					<span class="header__mobile-menu-button js-open-mobile-menu">
						<span class="header__mobile-menu-text">View the <span>menu</span></span>
						<svg class="header__mobile-menu-icon"> <use xlink:href="#icon-burger-menu"></use> </svg>
						<svg class="header__mobile-menu-icon header__mobile-menu-icon-sticky"> <use xlink:href="#icon-burger-menu-black"></use> </svg>
					</span>
				</div>
			</div>
			<div class="header__mobile-menu-logo">
				<a href="<?php echo site_url(); ?>"><svg class="logo-white"> <use xlink:href="#logo-white"></use> </svg></a>				
			</div>
		</div>
	</header>

	<div class="header__mobile header__mobile--option2">
		<div class="header__mobile-close">
			<span class="header__mobile-close-btn js-close-mobile-menu">
				<span class="header__mobile-close-btn-text">Close the <span>menu</span></span>
				<svg class="header__mobile-close-btn-icon"> <use xlink:href="#icon-close-big"></use> </svg>
			</span>
		</div>
		<div class="header__mobile-logo">
			<a href="">
				<svg class="header__mobile-logo-img"> <use xlink:href="#logo-black"></use> </svg>
			</a>
		</div>
		<div class="header__mobile-navigation">
			<?php if( have_rows('navigation', 'options') ): ?>
				<?php while( have_rows('navigation', 'options') ): the_row(); ?>
				<ul class="header__mobile-navigation-ul">
					<?php while( has_sub_field('menu') ): ?>
						<?php $link = get_sub_field('link'); ?>
						<?php if($link): ?>
							<li><a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo html_entity_decode($link['title']); ?></a></li>
						<?php endif; ?>
					<?php endwhile; ?>
				</ul>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php $contact = get_field('contact', 'options'); ?>
			<div class="header__mobile-navigation-text">
				<p><?php echo $contact['text']; ?></p>
			</div>
			<div class="header__mobile-navigation-btn">
				<?php $link = $contact['link']; ?>
				<?php if($link): ?>
				<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button button--gray hover--dark-gray"><?php echo $link['title']; ?> <span class="icon-arrow icon-arrow--gray"></span></a>
				<?php endif; ?>
			</div>
		</div>
		<div class="header__mobile-footer">
		<?php if( have_rows('social_media', 'options') ): ?>
			<?php while( have_rows('social_media', 'options') ): the_row(); ?>
			<div class="header__social header__mobile-social">
				<span class="header__social-icon header__mobile-social-icon"><?php the_sub_field('logo'); ?></span>
				<span class="header__social-text header__mobile-social-text"><?php the_sub_field('text'); ?></span>
				<?php $link = get_sub_field('social_link'); ?>
				<?php if($link): ?>
				<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="header__social-link header__mobile-social-link"><?php echo $link['title']; ?></a>
				<?php endif; ?>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
