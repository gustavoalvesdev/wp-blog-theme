<div class="col-sm-4 sidebar">
    <sidebar>
            <?php 
                if (is_active_sidebar('bm_sidebar')) {
                    dynamic_sidebar('bm_sidebar');
                }
            ?>
    </sidebar>
</div>
<!-- col-sm-4 -->