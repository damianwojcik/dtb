<?php
    $galleries_array = get_posts(
        array(
            'posts_per_page' => -1,
            'post_type' => 'realizations',
        )
    );
?>

<section class="section section--realizations animation-element b-lazy" data-anim="slide_top" data-src="<?= THEME_URL ?>/assets/img/bg-projects.jpg">

    <h2 class="offscreen">Realizacje</h2>

    <div class="container">

        <div class="row">

            <ul class="gallery-filters">

                <li class="gallery-filters__item active">
                    <button class="gallery-filters__button" data-filter="*">
                        <span class="dot"></span>
                        <h3 class="gallery-filters__text">
                            Wszystkie
                        </h3>
                    </button>
                </li>

                <?php foreach($galleries_array as $gallery){ ?>
                    <li class="gallery-filters__item">
                        <button class="gallery-filters__button" data-filter=".<?php echo slugify($gallery->post_title); ?>">
                            <span class="dot"></span>
                            <h3 class="gallery-filters__text">
                                <?php echo $gallery->post_title; ?>
                            </h3>
                        </button>
                    </li>
                <?php } ?>

            </ul>

        </div><!-- /.row -->

        <div class="row">

            <ul class="gallery">

            <?php foreach($galleries_array as $gallery){

                $images = get_field('gallery', $gallery->ID);

                if( $images ) {

                    foreach ($images as $image){ ?>

                        <li class="<?php echo slugify($gallery->post_title); ?>">
                            <a href="<?php echo $image['url']; ?>" data-lightbox="<?php echo slugify($gallery->post_title); ?>">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                <div class="overlay">
                                    <h4 class="overlay__title"><?php echo $image['title']; ?></h4>
                                    <span class="btn btn-circle btn-circleoverlay"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
                                </div>
                            </a>
                        </li>

                <?php
                        } //end foreach image
                    } //end if images
                } // end foreach gallery
                ?>

            </ul><!-- /.gallery -->

        </div><!-- /.row -->

    </div><!-- /.container -->

</section><!-- /.section section-/-realizations -->