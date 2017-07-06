<?php if ( have_posts() ) :
    $count = 0;
?>

    <section class="section section--servicesCols animation-element" data-anim="slide_top">

        <h2 class="offscreen">Usługi</h2>


    <?php while ( have_posts() ) : the_post();

        $photo = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
        $title = get_the_title();
        $content = get_the_content();
        $trimmed_content = wp_trim_words( $content, 35 );

    ?>

        <?php if($count % 3 == 0) { ?>
            <div class="row">
        <?php } ?>

            <div class="col col-3">

                <a href="<?php the_permalink(); ?>" class="hoverbox b-lazy" data-src="<?php echo $photo; ?>">

                    <div class="hoverbox__overlay">

                        <div class="hoverbox__inner">

                            <h3 class="hoverbox__title"><?php echo $title; ?></h3>

                            <p class="hoverbox__description">
                                <?php echo $trimmed_content; ?>
                            </p>

                            <span class="btn btn-circle btn-circleoverlay"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>

                        </div><!-- /.hoverbox__inner -->

                    </div><!-- /.hoverbox__overlay -->

                </a><!-- /.hoverbox -->

            </div><!-- /.col-3 -->

        <?php if($count % 3 == 2) { ?>
            </div><!-- /.row- -->
        <?php } ?>

        <?php
            $count ++;
            endwhile;
        ?>


</section><!-- /.section section-/-servicesCols -->

<?php endif; ?>