<?php
/**
 * Template Name: Custom Event Query Loop
 */

get_header();
?>

<!-- TODO: CHECK IF STILL IN USE?! -->

<div class="event-query-loop">

	<?php
	// Step 1: Set up custom query
	$args = array(
		'post_type'      => 'event', // or your custom post type
		'posts_per_page' => 5,
		'orderby'        => 'date',
		'order'          => 'DESC',
	);

	$custom_query = new WP_Query( $args );

	if ( $custom_query->have_posts() ) :
		while ( $custom_query->have_posts() ) : $custom_query->the_post();

			?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2 class="entry-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                </header>
            </article>
		<?php

		endwhile;
	else :
		echo '<p>No posts found.</p>';
	endif;

	wp_reset_postdata();
	?>

</div>

<?php get_footer(); ?>
