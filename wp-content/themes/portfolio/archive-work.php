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
	$terms = get_terms( array(
		'taxonomy' => $taxonomy,
		'order'    => 'DESC',
	) );
	?>



	<?php foreach( $terms as $term ){ ?>
	<a href="<?php echo get_term_link($term->slug, $taxonomy) ?>">
		<div class="work">
			<section class="one-term <?php echo $term->slug ?>">
				<h2><?php echo $term->name; ?></h2>
			</section>
		</div>
	</a>
	<?php } //end foreach term ?>



</main>

<?php get_footer(); ?>
