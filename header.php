<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <link rel="stylesheet" href="https://use.typekit.net/zvy6nko.css"> -->
<link rel="stylesheet" href="https://use.typekit.net/zvy6nko.css">
<script defer src="<?php bloginfo('stylesheet_directory'); ?>/js/all.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="jc_global-header">
    <div class="jc_wrap">
        <div class="jc_header-logo">
            <a href="#">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <?php wp_nav_menu( array('theme_location' => 'main_menu' )); ?>
                <li><a href="#"><i class="fal fa-search fa-flip-horizontal"></i></a></li>
            </ul>
        </nav>
    </div>
</header>
