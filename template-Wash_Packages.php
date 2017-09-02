<?php /* Template Name: Wash Packages */ get_header(); ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php  
  
$feature_image = get_field( "feature_image" );
$intro_paragraph = get_field( "intro_paragraph" ); 

?> 
 
	<main role="main" id="inside">
 
		<figure id="feature-image"><img src="<?php echo $feature_image ?>" alt=""></figure>

		<div class="row">
			<section id="content">   
				<h1><?php the_title(); ?></h1>
				<p class="intro"><?php echo $intro_paragraph; ?></p> 
				<?php include("custom/packages.php"); ?>
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
