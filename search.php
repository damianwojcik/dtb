<?php get_header(); ?>

<?php get_template_part("partials/section", "title"); ?>

    <main class="content">

        <div class="container">

            <div class="row">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php

                    $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                    $title = get_the_title();

                    ?>

                    <?php if( !empty($title) ): ?>

                        <a href="<?php the_permalink(); ?>"><?php echo $title; ?></a> <br />

                    <?php endif; ?>

                <?php endwhile; endif; ?>

            </div><!-- /.row -->

        </div><!-- /.container -->

    </main><!-- /.content -->

<?php get_footer(); ?>