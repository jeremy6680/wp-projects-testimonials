<?php
/**
 * Displays a client card with the retrieved client details.
 *
 * @param string $class CSS class for the card
 * @param string $image_size Size of the post thumbnail to display
 *
 * @return void
 */
?>
<div class="card container client-card bg-secondary d-flex">
    <div class="card-image p-2" style="flex-basis: 33%;">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); } ?>
    </div>
    <div class="card-body" style="flex-basis: 67%;">
        <div class="card-header px-0">
            <h3 class="card-title client-name">Client: <?php echo esc_html($name); ?></h3>
        </div>
        <ul class="client-meta">
            <?php
            if (!empty($industry)) {
                echo '<li><i class="fas fa-industry fa-fw"></i> <strong>Industry:</strong> ' . esc_html($industry) . '</li>';
            }
            if (!empty($website)) {
                echo '<li><i class="fas fa-link fa-fw"></i> <strong>Website:</strong> <a href="' . esc_html($website) . '">' . esc_html($website) . '</a></li>';
            }
            if (!empty($size)) {
                echo '<li><i class="fas fa-users fa-fw"></i> <strong>Size:</strong> ' . esc_html($size) . '</li>';
            }
            ?>
        </ul>
        <div class="client-bio my-2">
        <?php
        if (!empty($description)) {
            echo wpautop($description);
        } ?>
        </div>
    </div>
</div>