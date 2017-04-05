<?php get_header(); //include header.php ?>

<main id="content">

	<?php //THE LOOP
	if( have_posts() ){
		while( have_posts() ){
			the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>

		<ul>
			<?php $date = get_field('date');
			if ($date) { ?>
			<li><?php echo $date; ?></li>
			<?php } ?>
			<?php $client = get_field('client');
			if ($client) { ?>
			<li><?php echo $client; ?></li>
			<?php } ?>
			<?php the_terms($post->ID, 'work-type', '<li>',', ','</li>') ?>
		</ul>

		<?php the_post_thumbnail(); ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>

		<div class="tools">
			<?php $tools = get_field('tools');
			if ($tools) {
				echo $tools;
			}?>
		</div>

		<div class="link">
			<?php $link = get_field('link');
			if ($link) { ?>
				<a href="<?php echo $link; ?>">View Website</a>
			<?php } ?>
		</div>

		<div class="colors">
			<div class="color-1">
				<?php $color1 = get_field('color-1');
				if ($color1) { ?>
					<div class="color-chip" style="background: <?php echo $color1; ?>">blah</div>
				<?php } ?>
			</div>
		</div>

		<div class="more-stuff">
			<?php the_field('more_stuff'); ?>
		</div>

	</article>
	<!-- end post -->
	<?php
		} //end while
	} //end if
	else{
		echo 'no posts to show';
	}
	//end of THE LOOP.
	?>



</main>
<!-- end #content -->

<?php get_footer();  //include footer.php ?>
