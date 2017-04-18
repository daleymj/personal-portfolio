<?php get_header(); //include header.php ?>

<main id="content">

	<?php //THE LOOP
	if( have_posts() ){
		while( have_posts() ){
			the_post();
	?>
	<div class="work">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>

			<ul class="casestudy">
				<?php $date = get_field('date');
				$date = new DateTime($date);
				if ($date) { ?>
				<li><?php echo $date->format('M j Y'); ?></li>
				<?php } ?>
				<?php $client = get_field('client');
				if ($client) { ?>
				<li class="worktype"><?php echo $client; ?></li>
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
				<p>Colors Used</p>
				<div class="color-1 color">
					<?php $color1 = get_field('color-1');
					if ($color1) { ?>
						<div class="color-chip" style="background: <?php echo $color1; ?>;
						color: <?php echo contrast_color($color1) ?>">
							<?php echo $color1; ?>
						</div>
					<?php } ?>
				</div>
				<div class="color-2 color">
					<?php $color2 = get_field('color_2');
					if ($color2) { ?>
						<div class="color-chip" style="background: <?php echo $color2; ?>;
						color: <?php echo contrast_color($color2) ?>">
							<?php echo $color2; ?>
						</div>
					<?php } ?>
				</div>
				<div class="color-3 color">
					<?php $color3 = get_field('color_3');
					if ($color3) { ?>
						<div class="color-chip" style="background: <?php echo $color3; ?>;
						color: <?php echo contrast_color($color3) ?>">
							<?php echo $color3; ?>
						</div>
					<?php } ?>
				</div>
				<div class="color-4 color">
					<?php $color4 = get_field('color_4');
					if ($color4) { ?>
						<div class="color-chip" style="background: <?php echo $color4; ?>;
						color: <?php echo contrast_color($color4) ?>">
							<?php echo $color4; ?>
						</div>
					<?php } ?>
				</div>
			</div>

			<div class="more-stuff">
				<?php the_field('more_stuff'); ?>
			</div>

		</article>
	</div>
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
