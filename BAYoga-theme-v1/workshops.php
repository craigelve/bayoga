<?php 

/*
    Template Name: Workshops
*/

get_header(); ?>

	
	<main class="clear" style="background-image:url('<?php the_field('sub_background'); ?>')">
     <!-- Page Content --> 
		<div>
			<?php if( get_field('sub_title') ): ?>
				<h1><?php the_field('sub_title'); ?></h1>
			<?php endif; ?>
			
		</div>
	<!-- END -->
	</main>

    <!-- Page Content --> 
        <?php 
        if( have_posts() ): 
            while( have_posts() ): the_post(); ?>

                <p><?php the_content(); ?></p>
                

            <?php endwhile;
        endif;
        ?>

    <!-- workshops feed --> 
        <div class="post-loop-containter">
        <?php
            $args = array(
            'category_name' => 'workshops',
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