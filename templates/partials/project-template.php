<div class="card">
  <div class="card-body">
  <?php
    $project_description = get_post_meta( get_the_ID(), 'wysiwyg_projectdescription', true );
    if ( ! empty( $project_description ) ) {
    echo wpautop( $project_description ); // wpautop adds HTML paragraph tags
    }
    ?>
  </div>
</div>