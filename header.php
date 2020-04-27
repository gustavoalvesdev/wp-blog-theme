<html>
<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="top_header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="collapse navbar-collapse">
                        <?php 
                            if (has_nav_menu('top')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'top',
                                    'container' => false,
                                    'fallback_cb' => false,
                                    'menu_class' => 'nav navbar-nav'
                                ));
                            }
                        ?>
                    </div>
                    <!-- collapse -->
                </div>
                <!-- container -->
            </nav>
            <!-- navbar -->
        </div>
        <!-- top_header -->
        <div class="main_header">
            <div class="container">
                <div class="logo">
                    <?php
                        if (has_custom_logo()) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <!-- logo -->
                <div class="main_nav_border">
                    <div class="main_nav">
                        <?php 
                            if (has_nav_menu('primary')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'fallback_cb' => false,
                                    'menu_class' => 'nav navbar-nav'
                                ));
                            }
                        ?>
                        <div class="search_area">
                            <?php get_search_form(); ?>
                        </div>
                        <!-- search_ area -->
                    </div>
                    <!-- main_nav -->
                    <div class="main_info">
                        <div class="row">
                            <div class="col-sm-8 randompost">
                                <strong>Você já viu?</strong>
                                <?php 
                                    $array = array();
                                    $bm_query = new WP_Query(array(
                                        'posts_per_page' => 1,
                                        'post_type' => 'post',
                                        'orderby' => 'rand'
                                    ));
                                    if ($bm_query->have_posts()) {
                                        while($bm_query->have_posts()) {
                                            $bm_query->the_post();
                                    ?>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <?php 

                                        }
                                        wp_reset_postdata();
                                    }
                                    ?>
                            </div>
                            <!-- col-sm-8 -->
                            <div class="col-sm-4 socialarea">
                                <div class="socialtxt">
                                    SIGA: 
                                </div>
                                <!-- socialtxt -->
                                <div class="socialicons">
                                    <a href="https://www.facebook.com/gustavoalvesdasilva2509" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt="rede social" />
                                    </a>
                                    <a href="https://www.google.com" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gplus.png" alt="rede social" />
                                    </a>
                                    <a href="https://www.instagram.com/gugagalves2509" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" alt="rede social" />
                                    </a>
                                    <a href="https://www.twitter.com" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter.png" alt="rede social" />
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCnBh2xIlUUWNmdTyVMyjt3A" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" alt="rede social" />
                                    </a>
                                </div>
                                <!-- socialicons -->
                            </div>
                            <!-- col-sm-4 -->
                        </div>
                        <!-- row -->
                    </div>
                    <!-- main_info -->
                </div>
                <!-- main_nav_border -->
            </div>
            <!-- container -->
        </div>
        <!-- main_header -->
    </header>
</body>
</html>