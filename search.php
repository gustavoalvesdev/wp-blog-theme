<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 maincontent">
                
                <h1>Pesquisou por: <?= get_search_query(); ?></h1>

                <?php if (have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <?php get_template_part('template_parts/post'); ?>
                    <?php endwhile; ?>
                    <div class="pag">
                        <div class="previous_pag"><?php previous_posts_link('Página Anterior'); ?></div>
                        <!-- previous_pag -->
                        <div class="next_pag"><?php next_posts_link('Próxima Página'); ?></div>
                        <!-- next_pag -->
                        <div style="clear:both;"></div>
                    </div>
                    <!-- pag -->
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
