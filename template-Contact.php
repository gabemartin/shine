<?php /* Template Name: Contact */ get_header(); ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php

$intro_paragraph = get_field( "intro_paragraph" );
$main_content = get_field( "main_content" );

?>
	<main role="main" id="inside">

		<?php if ($feature_image): ?>
			<figure id="feature-image"><img src="<?php echo $feature_image ?>" alt=""></figure>
		<?php endif ?>
		<div class="row">
			<section id="content">
					<h1><?php the_title(); ?></h1>
					<p class="intro"><?php echo $intro_paragraph; ?></p>
					<div class="row">

						<aside class="hours">
							<h3>Hours</h3>
							<?php tablepress_print_table( 'id=3&use_datatables=true&print_name=false' ); ?>
						</aside>
						<div class="contact-form add-column">
							<?php
								if ( is_user_logged_in() ) {
								    echo '<a href="/wp-admin/admin.php?page=wpcf7&post=128&action=edit" class="post-edit-link">EDIT CONTACT FORM</a>';
								}
							?>
							<?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>

						</div>
					</div>

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
