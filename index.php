<?php get_header();?>


  <h1><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p>         

<main class="container">
    <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
		  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h3 class="mb-0"> <?php the_title(); ?> </h3>
          <div class="mb-1 text-body-secondary"> <p class="card-text mb-auto"><?php the_content(); ?></p></div>
		        <?php endwhile;
				  else :
					  echo '<div class="mb-1 text-body-secondary">No content found</div>';
				  endif;
				  ?> 
        </div>
      </div>
    </div>
 
</main>

<?php get_footer(); ?>