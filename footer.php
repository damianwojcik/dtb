<?php $contactlink = get_permalink( get_page_by_title( 'Kontakt' ) ) ?>

<footer class="site-footer animation-element" data-anim="slide_top">

    <div class="container">

        <div class="row">

            <div class="col">

                <a class="btn btn-red" href="<?php echo $contactlink; ?>">Skontaktuj się z nami</a>

            </div><!-- /.col -->

            <div class="col">

                <nav class="footer-nav">

                    <h2 class="offscreen">Nawigacja footer</h2>

                    <?php wp_nav_menu( array(  'menu'   => 'Menu footer' )); ?>

                </nav><!-- /.footer-nav -->

            </div><!-- /.col -->

            <div class="wrap">

                <div class="col col-6">

                    <?php if( have_rows('social_media', 'option') ): ?>

                        <ul class="socials-footer">

                            <?php while( have_rows('social_media', 'option') ): the_row(); ?>

                                <li>
                                    <a href="<?php the_sub_field('link_url'); ?>" target="_blank" class="socials-footer__item">
                                        <i class="fa <?php the_sub_field('icon'); ?>" aria-hidden="true"></i>
                                    </a>
                                </li>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                </div><!-- /.col .col-6 -->

                <div class="col col-6">

                    <p class="copy">&copy; 2017 <a href="http://dwojcik.dev/" target="_blank" rel="noopener noreferrer">dwojcik.dev</a></p>

                </div><!-- /.col .col-6 -->

            </div><!-- /.wrap -->

        </div><!-- /.row -->

    </div><!-- /.container -->

</footer><!-- /.site-footer -->

</div><!-- /.page-wrapper-->

<button class="js-scrollToTop" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

<!-- End Document
================================================== -->

<?php wp_footer(); ?>
</body>
</html>
