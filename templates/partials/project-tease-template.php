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

<figure class="image-item col-3 shuffle-item shuffle-item--visible" 
<?php
$project_type_slugs = WPPT_Helper::get_project_type_terms( get_the_ID() );

if ( ! empty( $project_type_slugs ) ) {
    $data_groups = 'data-groups=["' . implode( '", "', $project_type_slugs ) . '"]';
    echo esc_attr( $data_groups );
}?>>
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>" obj.alt="obj.alt"></div>
      </div>
      <figcaption class="overflow-hidden text-ellipsis whitespace-nowrap"><?php the_title(); ?></figcaption>
</figure>