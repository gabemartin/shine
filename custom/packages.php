<?php
if ( is_user_logged_in() ) {
    echo '<a href="/wp-admin/edit.php?post_type=benefit" class="post-edit-link">EDIT BENEFITS</a>';
}
?>



<div id="wash-packages-comparison">

	<?php

		// FUNCTION TO DISPLAY ALL THE BENEFITS PER PACKAGE:
		function listPackageBenefits($plan){
			$args = array(
				'orderby' 	=> 'menu_order',
				'post_type' => 'Benefit',
				'order'     => 'ASC',
				'posts_per_page' => 200,
			);
			$your_query = new WP_Query( $args );
			while ( $your_query->have_posts() ) : $your_query->the_post();
			$available_for = get_field( "available_for" );
			if (
				in_array($plan, $available_for)
			) {
				echo "<li class='y'>";
					the_title();
				echo "</li>";
			} else {
				echo "<li class='n'><strike>";
					the_title();
				echo "</strike></li>";
			}
			endwhile;
		}

		// LOOP THROUGH THE PACKAGES:
		$args = array(
			'orderby' 	=> 'menu_order',
			'post_type' => 'Package',
			'order'     => 'ASC',
			'posts_per_page' => 200,
		);
		$your_query = new WP_Query( $args );
		while ( $your_query->have_posts() ) : $your_query->the_post();
			$available_for = get_field( "available_for" );
			$title = get_the_title();
			$pkg_class = strtolower(str_replace(" ", "-", $title));

			echo "<div class='package $pkg_class'><h2>";
			echo "<span>Shine</span> <span class='title'>" . $title . "</span>";
			echo "</h2><ul>";
			//listPackageBenefits($title);





$post_objects = get_field('benefits');

if( $post_objects ): ?>
    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <li class="y">
        <?php the_title(); ?>
        </li>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif;



			echo "</ul></div>";
		endwhile;

?>









</div>