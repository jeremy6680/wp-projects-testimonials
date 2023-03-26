<?php
/**
 * HTML code for displaying a client testimonial card.
 *
 * The code generates a card with a client testimonial quote and the client's name and job title.
 * The card also includes the client's profile picture, if available.
 *
 * @param string $testimonial_text The text of the client's testimonial.
 * @param string $author_picture The URL of the client's profile picture.
 * @param string $author_name The name of the client.
 * @param string $author_job The job title of the client.
 *
 * @return string The HTML code for the client testimonial card.
 */
?>
<div class="card client-quote container bg-secondary">
  <div class="card-body">
    <?php if (!empty($testimonial_text)) : ?>
      <blockquote class="quote-content">
        <?php echo $testimonial_text; ?>
      </blockquote>
      <i class="fas fa-quote-left"></i>
    <?php endif; ?>
  </div><!--//card-body-->
  <div class="card-footer">
    <?php if (!empty($author_picture) || !empty($author_name) || !empty($author_job)) : ?>
      <div class="client-meta">
        <?php if (!empty($author_picture)) : ?>
          <div class="source-profile float-left">
            <img src="<?php echo $author_picture; ?>" alt="image" class="avatar avatar-xl"/>
          </div>
        <?php endif; ?>
        <div class="meta">
          <?php if (!empty($author_name)) : ?>
            <div class="name"><?php echo $author_name; ?></div>
          <?php endif; ?>
          <?php if (!empty($author_job)) : ?>
            <div class="info"><?php echo $author_job; ?></div>
          <?php endif; ?>
        </div>
      </div><!--//client-meta-->
    <?php endif; ?>
  </div><!--//card-footer-->
</div><!--//client-quote-->

