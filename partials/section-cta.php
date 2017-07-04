<?php

    // check if the repeater field has rows of data
    if( have_rows('section_cta') ):

        // loop through the rows of data
        while ( have_rows('section_cta') ) : the_row();

            $headline = get_sub_field('headline');
            $title = get_sub_field('title');
            $button_url = get_sub_field('button_url');
            if( empty($button_url) ){ $button_url = '#'; }

?>

            <section class="section section--projects animation-element" data-anim="slide_top" style="background-image: url('<?= THEME_URL ?>/assets/img/bg-projects.jpg')">

                <div class="container">

                    <div class="row">

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

                    </div><!-- /.row -->

                    <div class="row row-home">
                        <a class="btn btn-red btn-circle" href="<?php echo $button_url; ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>

                </div><!-- /.container -->

            </section><!-- /.section section--projects -->

<?php

    endwhile;

else :

    // no rows found

endif;

?>