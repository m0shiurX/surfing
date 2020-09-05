<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php bloginfo("name"); ?></h1>
            <p class="lead"><?php bloginfo("description"); ?></p>
            <hr class="my-2">
        </div>
    </div>

    <div class="container">
        <?php 

            while(have_posts()): the_post();?>
                <div <?php post_class("my-5 row") ?>>
                    <div class="col-5">
                        <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail("medium", ["class"=> "img-fluid"]);
                            }
                        ?>
                    </div>
                    <div class="col-7">
                        <h2><?php the_title(); ?> </h2>
                        <h6 class="text-black-50">On <i><?php echo get_the_date(); ?></i>
                        written by <?php the_author(); ?></h6>
                        <p><?php the_excerpt(); ?> </p>
                    </div>
                </div>
                    
            <?php
            endwhile;
        ?>
    </div>
    <?php wp_footer(); ?>
</body>
</html>