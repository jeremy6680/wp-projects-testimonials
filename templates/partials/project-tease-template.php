<?php
/**
 * This PHP code generates a card layout for displaying project information.
 * The card includes an image, title, client name, project type, excerpt, and a "Learn more" button.
 * The image is retrieved using the get_the_post_thumbnail_url function.
 * The title is displayed using the_title function.
 * The client name is retrieved using the WPPT_Helper::get_project_client_name function.
 * The project type is retrieved using the WPPT_Helper::get_project_type_terms function.
 * The excerpt is displayed using the_excerpt function.
 * The "Learn more" button links to the project's permalink and is displayed using the _e function.
 */
?>

<div class="mt-16 mt-md-0 ps-md-4 image-item col-3 shuffle-item shuffle-item--visible" 
  <?php
  $project_type_slugs = WPPT_Helper::get_project_type_terms( get_the_ID() );
  $project_type_names = WPPT_Helper::get_project_type_terms( get_the_ID(), 'name' );

  if ( ! empty( $project_type_slugs ) ) {
      $data_groups = 'data-groups=["' . implode( '", "', $project_type_slugs ) . '"]';
      echo esc_attr( $data_groups );
  }?>>
  <a href="<?php echo get_permalink(); ?>">
  <div class="img-container">
    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>" alt="">
  </div>
  <h5 class="mb-0 mt-6 lh-lg"><?php the_title(); ?></h5>
  <p class="mt-2 mb-0 text-uppercase text-muted" style="font-size: 12px;"><?php if ( ! empty( $project_type_names ) ) {
      echo implode( '", "', $project_type_names );
  }?></p>
  </a>
</div>

