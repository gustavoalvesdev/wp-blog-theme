    <footer>
        <div class="footer_widgets">
            <div class="container-fluid">
                <div class="row">
                    <?php 
                        if (is_active_sidebar('bm_footersidebar')) {
                            dynamic_sidebar('bm_footersidebar');
                        }
                    ?>
                </div>
                <!-- row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- footer_widgets -->
        <div class="main_footer">
            <div class="container">
                <div class="main_footer_left">
                    &copy; <?= date('Y'); ?> - Minimag - Todos os Direitos Reservados
                </div>
                <!-- main_footer_left -->
                <div class="main_footer_right">
                    Desenvolvido por Gustavo Alves da Silva
                </div>
                <!-- main_footer_right -->
                <div class="main_footer_scroll">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/seta-up.png" alt="seta para cima" />
                </div>
                <!-- main_footer_scroll -->
            </div>
            <!-- main_footer -->
        </div>
        <!-- container -->
    </footer>

</body>

</html>