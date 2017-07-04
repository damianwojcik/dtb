<?php

// check if the repeater field has rows of data
if( have_rows('section_equipment') ):

// loop through the rows of data
while ( have_rows('section_equipment') ) : the_row();

$section_title = get_sub_field('section_title');

?>

    <section class="section section--equipment animation-element" data-anim="slide_top" style="background-image: url('<?= THEME_URL ?>/assets/img/bg-equipment.jpg');">

        <div class="container">

            <div class="row">

                <h2 class="section__title"><?php echo $section_title; ?></h2>

            </div><!-- /.row -->

            <?php

                // check if the repeater field has rows of data
                if( have_rows('maszyna') ):

            ?>

            <div class="row">

                <?php
                    // loop through the rows of data
                    while ( have_rows('maszyna') ) : the_row();

                        $name = get_sub_field('name');
                        $photo = get_sub_field('photo');
                        $description = get_sub_field('description');

                ?>

                    <div class="col col-3">

                        <div class="machine">

                            <div class="machine__header">
                                <h3><?php echo $name; ?></h3>
                            </div>

                            <div class="machine__wrap">

                                <div class="machine__imgwrap">

                                    <img class="machine__img" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>"/>

                                </div>

                                <p class="machine__content">
                                    <?php echo $description; ?>
                                </p>

                            </div>

                        </div><!-- /.machine -->

                    </div><!-- /.col-3 -->

                <?php
                    endwhile;
                ?>

            </div><!-- /.row -->

            <?php
                else :

                    // no rows found

                endif;

            ?>

        </div><!-- /.container -->

    </section><!-- /.section section--equipment -->

<?php

    endwhile;

else :

    // no rows found

endif;

?>