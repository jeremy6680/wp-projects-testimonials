<?php

get_header(); ?>
 
 <div class="hero hero-sm bg-dark">
  <div class="hero-body container">
    <h1><?php echo get_the_archive_title(); ?></h1>
    <p class="lead">Project intro goes here. In the intro it's a good idea to answer a potential client's need/problem so it's more likely to land your next project or job.</p>
  </div>
</div>

 <div class="container">
    <div class="columns">
      <div class="column col-12">
        <div class="btn-group">
          <button class="btn btn-primary filter" data-category="all">All</button>
          <button class="btn btn-primary filter" data-category="category1">Category 1</button>
          <button class="btn btn-primary filter" data-category="category2">Category 2</button>
        </div>
      </div>
    </div>
    <div class="columns projects-grid">

      <?php
        if ( have_posts() ) :
          while ( have_posts() ) :
              the_post(); ?>
            <div class="column col-4 project category1">
              <div class="card">
                <div class="card-image">
                  <img src="https://placehold.co/600x400" class="img-responsive">
                </div>
                <div class="card-header">
                  <div class="card-title h5"><?php the_title(); ?></div>
                  <div class="card-subtitle text-gray">Client : <?php echo WPPT_Helper::get_project_client_name(get_the_ID()); ?></div>
                </div>
                <div class="card-body">
                  <p><?php the_excerpt(); ?></p>
                </div>
                <div class="card-footer">
                  <a href="<?php the_permalink(); ?>" class="btn btn-primary">Learn more</a>
                </div>
              </div>
            </div>
          <?php
          endwhile;
        else:
        // If no content, display a message
        endif;
      ?>

    </div>
  </div>

<?php get_footer();