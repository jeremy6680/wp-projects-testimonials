<?php
    // get the current project post ID
    $post_id = get_the_ID();
  $client_terms = get_the_terms($post_id, 'client');
  if ($client_terms && !is_wp_error($client_terms)) {
    foreach ($client_terms as $client_term) {
      $client_details = WPPT_Helper::get_client_details($client_term->term_id);
      $client_name = $client_details['name'];
      $client_description = $client_details['description'];
      $client_industry = $client_details['industry'];
      $client_website = $client_details['website'];
      $client_size = $client_details['size'];
    }
  }
  ?>
  <div class="card client-card bg-secondary d-flex">
    <div class="card-image p-2" style="flex-basis: 33%;">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); } ?>
        </div>
        <div class="card-body" style="flex-basis: 67%;">
        <div class="card-header px-0">
            <h3 class="card-title client-name">Client: <?php echo esc_html($client_name); ?></h3>
        </div>
        <ul class="client-meta">
            <?php
            if (!empty($client_industry)) {
                echo '<li><i class="fas fa-industry fa-fw"></i> <strong>Industry:</strong> ' . esc_html($client_industry) . '</li>';
            }
            if (!empty($client_website)) {
                echo '<li><i class="fas fa-link fa-fw"></i> <strong>Website:</strong> <a href="' . esc_html($client_website) . '">' . esc_html($client_website) . '</a></li>';
            }
            if (!empty($client_size)) {
                echo '<li><i class="fas fa-users fa-fw"></i> <strong>Size:</strong> ' . esc_html($client_size) . '</li>';
            }
            ?>
        </ul>
        <div class="client-bio my-2">
        <?php
        if (!empty($client_description)) {
            echo wpautop($client_description);
        } ?>
        </div>
    </div>
</div>