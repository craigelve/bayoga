<?php 

/*
    Template Name: Parent Page
*/

get_header(); ?>

    <?php 
        if( have_posts() ): 
            while( have_posts() ): the_post(); ?>

                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
                
                <hr>
                
            <?php endwhile;
        endif;
        ?>
        
        <?php 
          $args = array(
              'parent' => $post->ID,
              'post_type' => 'page',
              'post_status' => 'publish'
          ); 
          $pages = get_pages($args);  ?>
          <ul class="four no-bullets"> 
          <?php foreach( $pages as $page ) { ?>
           <li>
              <a href="<?php echo  get_permalink($page->ID); ?>" rel="bookmark" title="<?php echo $page->post_title; ?>">
              <span class="thumbnail"><?php echo get_the_post_thumbnail($page->ID, 'small-thumb'); ?></span>
              <span class="title"><?php echo $page->post_title; ?></span>
              <span class="desc"><?php echo get_post_meta($page->ID, 'desc', true); ?></span>
              </a>
          </li>
          <?php } ?>
          </ul>
        


<?php get_footer(); ?>