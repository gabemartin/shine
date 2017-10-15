<?php /* Template Name: Homepage */ get_header(); ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php

$feature_image = get_field( "feature_image" );
$page_header_lead_in = get_field( "page_header_lead_in" );
$page_header = get_field( "page_header" );
$intro_paragraph = get_field( "intro_paragraph" );
$wash_packages_header = get_field( "wash_packages_header" );
$wash_packages_description = get_field( "wash_packages_description" );

?>
	<div id="homepage-intro">
		<figure id="feature-image"><img src="<?php echo $feature_image ?>" alt=""></figure>
		<div class="homepage-lead">
			<div class="row">
				<div class="column">
					<?php
						if($page_header_lead_in) {
							echo "<div class='lead-in'> $page_header_lead_in </div>";
						}
					?>
					<h1><?php echo $page_header; ?></h1>
					<p class="intro"><?php echo $intro_paragraph; ?></p>
				</div>
			</div>
		</div>
	</div>
	<main role="main" id="inside">
		<div class="row">
			<section id="content">
				<h2 class="wash-packages"><?php echo $wash_packages_header; ?></h2>
				<?php
					if($wash_packages_description) {
						echo "<p>$wash_packages_description</p>";
					}
					?>
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
