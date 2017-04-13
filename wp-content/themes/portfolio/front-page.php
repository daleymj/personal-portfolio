<?php get_header(); //include header.php ?>

<?php //THE LOOP
if( have_posts() ){
  while( have_posts() ){
    the_post();
?>

<main id="content">
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
</main>

<?php
  } //end while
} //end if
else{
  echo 'no posts to show';
}
//end of THE LOOP.
?>

<?php get_footer();  //include footer.php ?>
