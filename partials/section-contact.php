<?php
    $email = get_field('email', 'option');
    $address = get_field('address', 'option');
?>

<section class="section section--contact animation-element b-lazy" data-anim="slide_top" data-src="<?= THEME_URL ?>/assets/img/intro-bg.png">

    <div class="container">

        <div class="row">

            <div class="col col-6">

                <div class="contactbox">

                    <h2 class="contactbox__title">Dane kontaktowe</h2>

                    <ul class="contactbox__list">

                        <?php if( !empty($address) ): ?>

                            <li>
                                <div class="contactbox__iconwrap">
                                    <i class="flaticon flaticon-placeholder"></i>
                                </div>
                                <div class="contactbox__wrap">
                                    <h3 class="contactbox__subtitle">Nasze biuro</h3>
                                    <span class="contactbox__data"><?php echo $address; ?></span>
                                </div>
                            </li>

                        <?php endif; ?>

                        <?php if( have_rows('phone_numbers', 'option') ): ?>

                            <li>
                                <div class="contactbox__iconwrap">
                                    <i class="flaticon flaticon-smartphone"></i>
                                </div>
                                <div class="contactbox__wrap">
                                    <h3 class="contactbox__subtitle">Telefon</h3>
                                    <span class="contactbox__data">
                                        <?php while( have_rows('phone_numbers', 'option') ): the_row(); ?>
                                            <?php the_sub_field('phone_number'); ?><br/>
                                        <?php endwhile; ?>
                                    </span>
                                </div>
                            </li>

                        <?php endif; ?>

                        <?php if( !empty($email) ): ?>

                            <li>
                                <div class="contactbox__iconwrap">
                                    <i class="flaticon flaticon-envelope"></i>
                                </div>
                                <div class="contactbox__wrap">
                                    <h3 class="contactbox__subtitle">Adres e-mail</h3>
                                    <span class="contactbox__data"><?php echo $email; ?></span>
                                </div>
                            </li>

                        <?php endif; ?>

                    </ul>

                </div>

            </div><!-- /.col col-6 -->

            <div class="col col-6">

                <div class="formbox">

                    <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 2 ); } ?>

                </div>

            </div><!-- /.col col-6 -->

        </div><!-- /.row -->

    </div><!-- /.container -->

</section><!-- /.section section-/-contact -->