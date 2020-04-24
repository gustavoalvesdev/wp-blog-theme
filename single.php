<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 maincontent">
                <?php if (have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        
                        <div class="post_title post_title_single"><?php the_title(); ?></div>

                        <div class="post_data"><?php echo get_the_date(); ?></div>

                        <div class="post_content"><?php the_content(); ?></div>

                    <?php endwhile; ?>
                    <div class="pag">
                        <div class="previous_pag"><?php previous_post_link(); ?></div>
                        <!-- previous_pag -->
                        <div class="next_pag"><?php next_post_link(); ?></div>
                        <!-- next_pag -->
                        <div style="clear:both;"></div>
                    </div>
                    <!-- pag -->

                    <div class="comments_area"> 
                        <?php if (comments_open()): ?>
                            <?php comments_template(); ?>
                        <?php endif; ?>
                    </div>
                    <!-- comments_area -->

                <?php endif; ?>
            </div>
            <!-- col-sm-8 -->
            <?php get_sidebar(); ?>
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>

<?php get_footer(); ?>