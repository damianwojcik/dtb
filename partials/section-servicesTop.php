<?php

// check if the repeater field has rows of data
if( have_rows('section_services') ):

// loop through the rows of data
while ( have_rows('section_services') ) : the_row();

$headline = get_sub_field('headline');
$scetion_title = get_sub_field('section_title');
$description = get_sub_field('description');
$button_title = get_sub_field('button_title');
$button_url = get_sub_field('button_url');
if( empty($button_url) ){ $button_url = '#'; }

?>


    <section class="section section--servicesTop animation-element" data-anim="slide_top">

        <div class="container">

            <div class="row">

                <div class="col col-6">

                    <?php
                        // check if the repeater field has rows of data
                        if( have_rows('service_box') ):

                    ?>

                    <div class="gradient-box">

                        <ul class="gradient-box__list">
                            <?php
                                // loop through the rows of data
                                while ( have_rows('service_box') ) : the_row();

                                    $icon = get_sub_field('icon');
                                    $title = get_sub_field('title');
                                    $box_link = get_sub_field('box_link');
                                    if( empty($box_link) ){ $box_link = '#'; }

                            ?>

                                <li class="gradient-box__item">
                                    <a href="<?php echo $box_link; ?>">
                                        <i class="flaticon <?php echo $icon; ?>"></i>
                                        <h3><?php echo $title; ?></h3>
                                    </a>
                                </li>

                            <?php
                                endwhile;
                            ?>
                        </ul>

                    </div><!-- /.gradient-box -->

                    <?php
                        else :

                            // no rows found

                        endif;

                    ?>

                </div><!-- /.col-6 -->

                <div class="col col-6">

                    <div class="wrap">

                        <?php if( ( !empty($headline) ) ): ?>
                            <h3 class="section__subtitle">
                                <?php echo $headline; ?>
                            </h3>
                        <?php endif; ?>

                        <?php if( ( !empty($scetion_title) ) ): ?>
                            <h2 class="section__title">
                                <?php echo $scetion_title; ?>
                            </h2>
                        <?php endif; ?>

                        <?php if( ( !empty($description) ) ): ?>
                            <p class="description">
                                <?php echo $description; ?>
                            </p>
                        <?php endif; ?>

                        <?php if( !empty($button_title) ){ ?>
                            <a class="btn btn-black" href="<?php echo $button_url; ?>"><?php echo $button_title; ?></a>
                        <?php } ?>

                    </div>

                </div><!-- /.col-6 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </section><!-- /.section section-/-servicesTop -->

<?php

    endwhile;

else :

    // no rows found

endif;

?>