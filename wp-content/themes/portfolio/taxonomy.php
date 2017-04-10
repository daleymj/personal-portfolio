<?php get_header(); //include header.php ?>

<main id="content">

	<?php //THE LOOP
	if( have_posts() ){
		while( have_posts() ){
			the_post();
	?>
	<a href="<?php the_permalink(); ?>">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<?php the_post_thumbnail(large); ?>
			<!-- end postmeta -->
		</article>
	</a>
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

<?php get_sidebar(); //include sidebar.php ?>
<?php get_footer();  //include footer.php ?>
