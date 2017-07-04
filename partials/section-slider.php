<?php

    $args = array('posts_per_page' => -1,
        'post_type' => 'slide',
        'orderby' => 'date',
        'order'=> 'ASC',);

    $posts_array = get_posts( $args );

?>

<section class="section section--slider animation-element" data-anim="slide_top">

    <h1 class="offscreen">Slider</h1>

    <div class="owl-carousel">

        <?php foreach ($posts_array as $post) {
            $photo = get_field('photo');
            $headline = get_field('headline');
            $title = get_field('title');
            $description = get_field('description');
            $button_title = get_field('button_title');
            $button_url = get_field('button_url');
            if( empty($button_url) ){ $button_url = '#'; }
        ?>

            <div class="item" style="background-image: url('<?php echo $photo['url']; ?>');">

                <div class="wrap">

                    <div class="inner-wrap">

                        <?php if( ( !empty($headline) ) ): ?>
                            <h3 class="sub-title"><?php echo $headline; ?></h3>
                        <?php endif; ?>

                        <?php if( ( !empty($title) ) ): ?>
                            <h2 class="title"><?php echo $title; ?></h2>
                        <?php endif; ?>

                        <?php if( ( !empty($description) ) ): ?>
                            <p class="description"><?php echo $description; ?></p>
                        <?php endif; ?>

                        <?php if( !empty($button_title) ){ ?>
                        <a class="btn btn-slider btn-orange" href="<?php echo $button_url; ?>">
                            <?php echo $button_title; ?>
                        </a>
                        <?php } ?>

                    </div><!-- /.inner-wrap -->

                </div><!-- /.wrap -->

            </div><!-- /.item -->

        <?php } // END foreach ?>

        <?php wp_reset_postdata(); ?>

    </div><!-- /.owl-carousel -->

</section><!-- /.section section--slider-->