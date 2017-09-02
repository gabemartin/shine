<?php
if ( is_user_logged_in() ) {
    echo '<a href="/wp-admin/edit.php?post_type=benefit" class="post-edit-link">EDIT BENEFITS</a>';
}
?>

<div id="wash-packages-comparison">

	<?php
		function shines($plan){
			$args = array(
				'orderby' 	=> 'menu_order',
				'post_type' => 'Benefit',
				'order'     => 'ASC',
			);
			$your_query = new WP_Query( $args );
			while ( $your_query->have_posts() ) : $your_query->the_post();
			$available_for = get_field( "available_for" );
			if (
				in_array($plan, $available_for)
			) {
				echo "<li>";
					the_title();
				echo "</li>";
			} else {
				echo "<li><strike>";
					the_title();
				echo "</strike></li>";
			}
			endwhile;
		}
	?>

	<div class="package shine-one">
		<h2>Shine One</h2>
		<ul>
			<?php
				shines("Shine One");
			?>
		</ul>
	</div>

	<div class="package shine-two">
		<h2>Shine Two</h2>
		<ul>
			<?php
				shines("Shine Two");
			?>
		</ul>
	</div>

	<div class="package shine-three">
		<h2>Shine Three</h2>
		<ul>
			<?php
				shines("Shine Three");
			?>
		</ul>
	</div>

	<div class="package shine-four">
		<h2>Shine Four</h2>
		<ul>
			<?php
				shines("Shine Four");
			?>
		</ul>
	</div>




</div>