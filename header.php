<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="<?= THEME_URL; ?>/favicon.ico" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <!-- HTML 5 SUPPORT
    ================================================== -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<?php
    $logo = get_field('logo', 'option');
    $logo_white = get_field('logo_white', 'option');
    $email = get_field('email', 'option');
?>

<!-- Preloader Start -->
<div id="preloader">
    <div class="loader">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!-- Preloader End -->

<div class="page-wrapper">

    <header class="top-panel animation-element" role="banner" data-anim="slide_top">

        <div class="container">

            <h1 class="site-logo">

                <a href="<?= SITE_URL; ?>">
                    <img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                </a>

            </h1><!-- /.site-logo-->

            <nav class="primary-nav">

                <h2 class="offscreen">Nawigacja desktopowa</h2>

                <button class="js-toggle-nav">

                    <div class="hamburger">

                        <span class="hamburger__bar"></span>
                        <span class="hamburger__bar"></span>
                        <span class="hamburger__bar"></span>

                    </div>

                    <span class="txt">Menu</span>

                </button>

                <?php wp_nav_menu( array(  'menu'   => 'Menu główne', 'menu_class'=>'primary-nav__menu', 'walker' => new My_Walker_Nav_Menu() )); ?>

            </nav><!-- /.primary-nav-->

            <nav class="contacts">

                <h2 class="offscreen">Dane kontaktowe</h2>

                <ul>

                    <?php if( !empty($email) ): ?>

                        <li>

                            <a href="mailto: <?php echo $email; ?>">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <?php echo $email; ?>
                            </a>

                        </li>

                    <?php endif; ?>

                    <?php if( have_rows('phone_numbers', 'option') ): ?>

                        <li>

                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>

                            <div class="wrap">

                                <?php while( have_rows('phone_numbers', 'option') ): the_row(); ?>

                                    <a href="tel: <?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a>

                                <?php endwhile; ?>

                            </div>

                        </li>

                    <?php endif; ?>

                </ul>

            </nav><!-- /.contacts-->

            <?php if( have_rows('social_media', 'option') ): ?>

                <nav class="socials">

                    <h2 class="offscreen">Social Media</h2>

                    <ul>

                        <?php while( have_rows('social_media', 'option') ): the_row(); ?>

                            <li>
                                <a href="<?php the_sub_field('link_url'); ?>" target="_blank" class="socials__item">
                                    <i class="fa <?php the_sub_field('icon'); ?>" aria-hidden="true"></i>
                                </a>
                            </li>

                        <?php endwhile; ?>

                    </ul>

                </nav><!-- /.socials-->

            <?php endif; ?>

        </div><!-- /.container-->

    </header><!-- /.top-panel-->

    <div class="menu_mobile">

        <div class="menu_mobile__inner">

            <a class="menu_mobile__close" href="#">
                <span>&times;</span>
            </a>

            <h1 class="site-logo">

                <a href="<?= SITE_URL; ?>">
                    <img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $logo_white['url']; ?>" alt="<?php echo $logo_white['alt']; ?>">
                </a>

            </h1><!-- /.site-logo-->

            <nav class="mobile-nav">

                <h2 class="offscreen">Nawigacja mobilna</h2>

                <?php wp_nav_menu( array( 'menu'   => 'Menu główne', 'menu_class'=>'mobile-nav__menu' )); ?>

            </nav><!-- /.mobile-nav-->

            <?php if( have_rows('social_media', 'option') ): ?>

                <nav class="socials-mobile">

                    <h2 class="offscreen">Social Media</h2>

                    <ul>

                        <?php while( have_rows('social_media', 'option') ): the_row(); ?>

                            <li>
                                <a href="<?php the_sub_field('link_url'); ?>" target="_blank" class="socials-mobile__item">
                                    <i class="fa <?php the_sub_field('icon'); ?>" aria-hidden="true"></i>
                                </a>
                            </li>

                        <?php endwhile; ?>

                    </ul>

                </nav><!-- /.socials-mobile-->

            <?php endif; ?>

            <?php dynamic_sidebar('search_panel'); ?>

        </div><!-- /.menu_mobile__inner-->

    </div><!-- /.menu_mobile-->