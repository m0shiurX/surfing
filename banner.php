<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"> <a href="<?php echo site_url(); ?>"> <?php bloginfo("name"); ?> </a></h1>
        <p class="lead"><?php bloginfo("description"); ?></p>
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