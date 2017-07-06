<?php
    if ( has_post_thumbnail( $_post->ID ) ) {
        $title_bg = get_the_post_thumbnail_url( $_post->ID, 'full' );
    }

    if ( is_post_type_archive() || is_search() ) {
        $title_bg = THEME_URL . '/assets/img/bg-services.jpg';
    }

    if ( is_404() ) {
        $title_bg = THEME_URL . '/assets/img/404.jpg';
    }
?>


<section class="section section--title animation-element b-lazy" data-anim="slide_top" data-src="<?php echo $title_bg;?>">

    <div class="wrap">

        <h2 class="section__title">
            <?php
                if ( is_post_type_archive() ) {
                    post_type_archive_title();
                } elseif(is_404()) {
                    echo '404';
                } elseif( is_search() ) {
                    echo 'Wyszukiwanie';
                } else {
                    the_title();
                }
                ?>
        </h2>

        <?php get_template_part("partials/module", "breadcrumbs"); ?>

    </div><!-- /.wrap -->

</section><!-- /.section section-/-title -->