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
<div class="col-6 flex-fill p-2 mt-16 mt-xl-10 <?php
              $project_type_slugs = WPPT_Helper::get_project_type_terms( get_the_ID() );
              if ( ! empty( $project_type_slugs ) ) {
                  echo esc_html( implode( ', ', $project_type_slugs ) );
              }
              ?>">                  
    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="">
    <h5 class="mb-0 mt-6 lh-lg"><?php the_title(); ?></h5>
    <p class="mt-2 mb-0 text-uppercase text-muted" style="font-size: 12px;">Art direction</p>
</div>
