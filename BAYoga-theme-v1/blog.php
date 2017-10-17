<?php 

/*
    Template Name: Blog
*/

get_header(); ?>


    <!-- Page Content --> 
        <?php 
        if( have_posts() ): 
            while( have_posts() ): the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
                

            <?php endwhile;
        endif;
        ?>

    <!-- workshops feed --> 
        <div class="post-loop-containter">
        <?php
            $args = array(
            'category_name' => 'blog',
            'posts_per_page' => 20,
            'order' => 'DESC'
        );

        $rp = new WP_Query( $args );

        if($rp->have_posts()) :
            while($rp->have_posts()) : $rp->the_post();?>

                <div class="post-container" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    <hr/>
                </div>
            <?php endwhile;
            wp_reset_postdata(); 
        endif;
            ?>
        </div>
    <!-- END --> 

    
<?php get_footer(); ?>