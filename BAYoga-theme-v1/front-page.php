<?php get_header(); ?>
	
	<main class="clear" style="background-image:url('<?php the_field('main_background'); ?>')">
     <!-- Page Content --> 
		<div>
			<?php if( get_field('main_title') ): ?>
				<h1><?php the_field('main_title'); ?></h1>
			<?php endif; ?>
			<?php if( get_field('main_cta_text') ): ?>
				<a class="main_cta_button" href="<?php the_field('main_cta_link'); ?>"><?php the_field('main_cta_text'); ?></a>
			<?php endif; ?>
		</div>
	<!-- END -->
	</main>


	<article class="clear">
		<?php if( get_field('workshop_course_feed') ): ?>
			<?php the_field('workshop_course_feed'); ?>
		<?php endif; ?>
		
        <!-- Workshop and Course feed --> 
        <div class="post-loop-containter">
        <?php
            $args = array(
            'category_name' => 'workshops,courses',
            'posts_per_page' => 3,
            'order' => 'DESC'
        );

        $rp = new WP_Query( $args );

        if($rp->have_posts()) :
            while($rp->have_posts()) : $rp->the_post();?>

                <div class="post-container" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </div>
            <?php endwhile;
            wp_reset_postdata(); 
        endif;
            ?>
        </div>
        <!-- END -->
		<a class="halfpagebutton" href="<?php get_site_url(); ?>bayoga/workshops">View all Workshops</a>
		<a class="halfpagebutton" href="<?php get_site_url(); ?>bayoga/courses">View all Courses</a>
		
	</article>

	<section class="clear">
		<?php if( get_field('offer_section') ): ?>
				<?php the_field('offer_section'); ?>
			<?php endif; ?>
	</section>

	<section class="clear videosection">
		<?php if( get_field('video_section') ): ?>
				<?php the_field('video_section'); ?>
			<?php endif; ?>
	</section>


	<section class="clear testimonial">
		<?php if( get_field('testimonial') ): ?>
				<?php the_field('testimonial'); ?>
			<?php endif; ?>
	</section>


	<article class="clear">
    
        <!-- Blog feed --> 
        <div class="post-loop-containter">
        <?php
            $args = array(
            'category_name' => 'blog',
            'posts_per_page' => 3,
            'order' => 'DESC'
        );

        $rp = new WP_Query( $args );

        if($rp->have_posts()) :
            while($rp->have_posts()) : $rp->the_post();?>

                <div class="post-container" style="background-image:url(<?php the_post_thumbnail_url() ?>)">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </div>
            <?php endwhile;
            wp_reset_postdata(); 
        endif;
            ?>
        </div>
        <!-- END --> 
	</article>

	<section class="clear signup">
		<?php if( get_field('newsletter_signup') ): ?>
				<h2><?php the_field('newsletter_signup'); ?></h2>
			<?php endif; ?>
	</section>

<?php get_footer(); ?>