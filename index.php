<?php get_header(); ?>
<body <?php body_class() ?>>
    <?php get_template_part("banner"); ?>
    <div class="container">
        <?php 
            while(have_posts()): the_post();?>
                <div <?php post_class("my-5 row") ?>>
                    <div class="col-6">
                        <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail("large", ["class"=> "img-fluid"]);
                            } else {?>
                                <img src="<?php echo get_template_directory_uri()."/assets/thumbnail.png"; ?>" class="img-fluid">
                            <?php }
                        ?>
                    </div>
                    <div class="col-6">
                        <h2> <a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a> </h2>
                        <h6 class="text-black-50">On <i><?php echo get_the_date(); ?></i>
                        written by <?php the_author(); ?></h6>
                        <p>
                            <?php the_excerpt(); ?> </p>
                    </div>
                </div>
                    
            <?php
            endwhile;
        ?>
    </div>
<?php get_footer(); ?>
