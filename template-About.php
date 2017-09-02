<?php /* Template Name: About */ get_header(); ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php  

$intro_paragraph = get_field( "intro_paragraph" );
$main_content = get_field( "main_content" ); 

?> 
	<main role="main" id="inside">
 

		<div class="row">
			<section id="content">   
					<h1><?php the_title(); ?></h1>
					<p class="intro"><?php echo $intro_paragraph; ?></p>
					<?php echo $main_content; ?>
			</section> 
		</div>  
  	</main>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>

		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		
	</article>
	<!-- /article -->
<?php endif; ?>
 

<?php get_footer(); ?>
