<?php get_header();?>


  <h1><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p>

  <?php
  if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>
          <h2 class='test'><?php the_title(); ?></h2>
          <div><?php the_content(); ?></div>
      <?php endwhile;
  else :
      echo '<p>No content found</p>';
  endif;
  ?>
<?php get_footer(); ?>