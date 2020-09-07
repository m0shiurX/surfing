<div class="container-fluid p-0">
    <?php
        if(get_header_image()): ?>
        <img src="<?php header_image(); ?>" class="custom_header">
        <?php endif;
    ?>
</div>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="col-6">
            <?php
                if(current_theme_supports("custom-logo")){
                    the_custom_logo();
                }
            ?>
        </div>
        <h1 class="display-4 site-title"> <a href="<?php echo site_url(); ?>"> <?php bloginfo("name"); ?> </a></h1>
        <p class="lead site-description"><?php bloginfo("description"); ?></p>
        <hr class="my-2">
        <div class="navigation">
            <?php
                wp_nav_menu([
                    "theme_location" => "top_nav",
                    "menu_class"    => "nav",
                    "menu_id"    => "top_nav",
                    "container_class"    => "menu_container",
                ]);

            ?>
        </div>
    </div>
</div>