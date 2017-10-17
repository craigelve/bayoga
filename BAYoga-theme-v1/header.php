<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Test</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<?php 
        if( is_front_page() ):
            $frontpage_class = array ( 'frontpage-class');
        else:
            $frontpage_class = array ( 'subpage-class' );
        endif;
    ?>

<body <?php body_class( $frontpage_class ); ?>>

	<header>
		<?php the_custom_logo(); ?>

		<a id="menuexpand">
			<div class="burgerwrap">
				<div class="burger">
					<span></span>
				</div>
			</div>
			<p>menu</p>
		</a>
		<?php wp_nav_menu( array('theme_location'=>'primary')); ?>
		<?php wp_nav_menu( array('theme_location'=>'bookingbutton')); ?>
	</header>
	<div class="pagewrapper">