<?php /* Template Name: FAQs */ get_header(); ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php
	$intro_paragraph = get_field( "intro_paragraph" );
?>
	<main role="main" id="inside">
		<?php if ($feature_image): ?>
			<figure id="feature-image"><img src="<?php echo $feature_image ?>" alt=""></figure>
		<?php endif ?>

		<div class="row">
			<section id="content">
				<h1><?php the_title(); ?></h1>
				<div id="bodycopy">
					<p class="intro"><?php echo $intro_paragraph; ?></p>

					<?php
						// query for the about page
						$args = array(
							'orderby' 	=> 'menu_order',
							'post_type' => 'FAQ',
							'order'     => 'ASC',
						);
						$your_query = new WP_Query( $args );
						// "loop" through query (even though it's just one page)
					?>
							<div class="row">
								<aside id="jump-links">
									<h3>Quick Links:</h3>
									<ul>
										<?php while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
											<li><a href="#<?php the_id(); ?>"><?php the_title(); ?></a></li>
										<?php endwhile; ?>
									</ul>
								</aside>
								<dl id="faq-list" class="add-column">
									<?php while ( $your_query->have_posts() ) : $your_query->the_post(); ?>
										<dt>
											<a name="<?php the_id(); ?>"></a>
											<h2><?php edit_post_link(); ?><?php the_title(); ?></h2>
										</dt>
										<dd><?php the_content(); ?></dd>

									<?php endwhile; ?>
								</dl>
							</div>
					<?php
						// reset post data (important!)
						wp_reset_postdata();
					?>

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
