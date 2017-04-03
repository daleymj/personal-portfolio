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
		<?php the_post_thumbnail(); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<?php echo get_post_meta($post->ID, 'link', true) ?>
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
