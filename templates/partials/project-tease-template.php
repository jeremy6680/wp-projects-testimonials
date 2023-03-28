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
 <div class="card">
    <div class="card-image">
        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>" class="img-responsive">
    </div>
    <div class="card-header">
        <div class="card-title h5"><?php the_title(); ?></div>
        <div class="card-subtitle text-gray"><?php _e( 'Client : ', 'wppt-plugin' ); ?><?php echo WPPT_Helper::get_project_client_name(get_the_ID()); ?></div>
        <div class="card-subtitle text-gray"><?php _e( 'Type : ', 'wppt-plugin' ); ?>
            <?php
            $project_type_names = WPPT_Helper::get_project_type_terms( get_the_ID(), 'name' );
            if ( ! empty( $project_type_names ) ) {
                echo esc_html( implode( ', ', $project_type_names ) );
            }
            ?>
        </div>
    </div>
    <div class="card-body">
        <p><?php the_excerpt(); ?></p>
    </div>
    <div class="card-footer">
        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e( 'Learn more', 'wppt-plugin' ); ?></a>
    </div>
</div>
