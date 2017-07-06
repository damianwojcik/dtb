<?php

// check if the repeater field has rows of data
if( have_rows('section_intro') ):

    // loop through the rows of data
    while ( have_rows('section_intro') ) : the_row();

        $photo = get_sub_field('photo');
        $headline = get_sub_field('headline');
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $button_title = get_sub_field('button_title');
        $button_url = get_sub_field('button_url');
        if( empty($button_url) ){ $button_url = '#'; }

?>

        <section class="section section--intro animation-element b-lazy" data-anim="slide_top" data-src="<?= THEME_URL ?>/assets/img/intro-bg.png">

            <div class="container">

            <div class="row">

                <div class="col col-6">

                    <?php if( ( !empty($headline) ) ): ?>
                        <h2 class="section__subtitle">
                            <?php echo $headline; ?>
                        </h2>
                    <?php endif; ?>

                    <?php if( ( !empty($title) ) ): ?>
                        <h1 class="section__title">
                            <?php echo $title; ?>
                        </h1>
                    <?php endif; ?>

                    <?php if( ( !empty($content) ) ): ?>
                        <p class="description">
                            <?php echo $content; ?>
                        </p>
                    <?php endif; ?>

                    <?php if( !empty($button_title) ){ ?>
                        <a class="btn btn-red" href="<?php echo $button_url; ?>"><?php echo $button_title; ?></a>
                    <?php } ?>

                </div><!-- /.col-6 -->

                <div class="col col-6">

                    <?php if( ( !empty($photo) ) ): ?>

                        <img class="img-intro b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />

                    <?php endif; ?>

                </div><!-- /.col-6 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

        </section><!-- /.section section--intro-->

<?php

    endwhile;

else :

    // no rows found

endif;

?>