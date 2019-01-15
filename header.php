<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1b1e3c">
<meta name="msapplication-TileColor" content="#1b1e3c">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="https://use.typekit.net/zvy6nko.css">
<script defer src="<?php bloginfo('stylesheet_directory'); ?>/js/all.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(is_page('home')): ?>
<div class="jc_home-hero">
    <div class="jc_home-hero-slides">
        <?php if( have_rows('home_slider') ): ?>
            <?php while ( have_rows('home_slider') ) : the_row(); ?>
                <?php
                    $attachment_id = get_sub_field('hero_slide_image');
                    $size = "full";
                    $image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
                <div class="jc_home-hero-slide" style="background: #fff url(<?php echo $image[0]; ?>) no-repeat center center;background-size: cover;">
                    <h2 class="jc_hero-text-<?php the_sub_field('home_slide_text_colour'); ?>"><?php the_sub_field('home_slide_title'); ?></h2>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <button><img src="<?php bloginfo('stylesheet_directory'); ?>/img/down-arrow.svg"></button>
</div>
<?php endif; ?>
<header class="jc_global-header" id="jc_header">
    <div class="jc_wrap">
        <div class="jc_header-logo">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/jc_logo.svg" alt="<?php bloginfo('name'); ?>">
            </a>
            <div class="jc_menu-toggle">
                <i class="far fa-bars"></i>
            </div>
        </div>
        <nav>
            <ul>
                <?php wp_nav_menu( array('theme_location' => 'main_menu' )); ?>
                <li>
                    <div class="jc_header-search-wrap">
                        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
					        <input  placeholder="Search..." type="search" value="Search..." name="s" id="s" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
					        <button id="searchsubmit">Search</button>
				        </form>
                    </div>
                    <a href="#"><i class="fal fa-search fa-flip-horizontal"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</header>
