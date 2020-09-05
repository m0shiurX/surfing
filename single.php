<?php get_header(); ?>
<body <?php body_class() ?>>
    <?php get_template_part("banner"); ?>
    <div class="container">
        <?php 
            while(have_posts()): the_post();?>
                <div <?php post_class("my-5 row") ?>>
                    <div class="col-12 my-3">
                        <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail("large", ["class"=> "img-fluid"]);
                            }
                        ?>
                    </div>
                    <div class="col-12">
                        <h1> <?php the_title(); ?> </h1>
                        <h6 class="text-black-50">On <i><?php echo get_the_date(); ?></i>
                        written by <?php the_author(); ?></h6>
                        <p class="mt-5"> <?php the_content(); ?> </p>
                    </div>
                </div>
                    
            <?php
            endwhile;
        ?>
    </div>
<?php get_footer(); ?>