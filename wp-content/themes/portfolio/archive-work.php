<?php

//edit these to match your site's needs:
$post_type = 'work';
$taxonomy = 'work-type';

get_header(); ?>

<main id="content">
			<h1 class="page-title">
				Portfolio
			</h1>

	<?php
	//Get all the brands that have products in them
	$terms = get_terms( $taxonomy );
	?>



	<?php foreach( $terms as $term ){ ?>
	<section class="one-term">
		<h2><?php echo $term->name; ?></h2>

		<ul>
			<?php //get all the products in THIS term

			$worktype = $term->slug;

			$query = new WP_Query( array(
				'post_type' 		=> $post_type,
				'posts_per_page' 	=> 1,
				'tax_query'			=> array(
					array(
						'taxonomy' 		=> $taxonomy,
						'terms'			=> $term->slug,
						'field'			=> 'slug',
					),
				),
			) );
			if( $query->have_posts() ){

				while( $query->have_posts() ){
					$query->the_post();
			?>
				<a href="<?php echo get_term_link($worktype, $taxonomy); ?>">
					<?php the_post_thumbnail( 'large' ); ?>
				</a>

			<?php

				} //end while
				wp_reset_postdata();
			}//end if ?>

		</ul>
	</section>
	<?php } //end foreach term ?>



</main>

<?php get_footer(); ?>
