<?php

    // check if the repeater field has rows of data
    if( have_rows('section_promo') ):

        // loop through the rows of data
        while ( have_rows('section_promo') ) : the_row();

            $headline = get_sub_field('headline');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
?>

            <section class="section section--promo animation-element" data-anim="slide_top">

                <div class="container">

                    <div class="row">

                        <?php if( ( !empty($headline) ) ): ?>
                            <h3 class="section__subtitle">
                                <?php echo $headline; ?>
                            </h3>
                        <?php endif; ?>

                        <?php if( ( !empty($title) ) ): ?>
                            <h2 class="section__title">
                                <?php echo $title; ?>
                            </h2>
                        <?php endif; ?>

                        <?php if( ( !empty($description) ) ): ?>
                            <h4 class="section__price">
                                <?php echo $description; ?>
                            </h4>
                        <?php endif; ?>

                    </div><!-- /.row -->

                </div><!-- /.container -->

            </section><!-- /.section section-/-promo -->

<?php

    endwhile;

else :

    // no rows found

endif;

?>