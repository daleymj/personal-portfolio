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
			<?php $client = get_field('client');
			if ($client) { ?>
			<li><?php echo $client; ?></li>
			<?php } ?>
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
			<?php $tools = get_field('link');
			if ($link) { ?>
				<a href="#"><?php echo $link; ?></a>
			<?php } ?>
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
