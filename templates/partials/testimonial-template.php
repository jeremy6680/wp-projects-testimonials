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

<section class="py-28 bg-white overflow-hidden position-relative">
  <img class="img-fluid position-absolute top-0 start-0" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/images/testimonials/testimonial-1-shadow.png" alt="">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 col-xl-5 mb-20 mb-md-0" style="z-index: 1;">
        <div class="mw-md-md">
          <img src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/icons/testimonials-quote.svg" alt="">
          <?php if (!empty($testimonial_text)) : ?>
          <h2 class="mb-12 mt-6 lh-sm font-heading"><?php echo $testimonial_text; ?></h2>
          <?php endif; ?>
          <?php if (!empty($author_name)) : ?>
            <h5 class="fw-bold lh-lg font-heading"><?php echo $author_name; ?></h5>
          <?php endif; ?>
          <?php if (!empty($author_job)) : ?>
            <span class="text-muted small"><?php echo $author_job; ?></span>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-7">
        <div class="mx-auto me-md-0 mw-lg pt-12 position-relative">
          <div class="position-absolute px-80 h-100 top-0 start-50 ms-xl-n16" style="background-image: url('<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/images/testimonials/colors.png'); background-size: cover;"></div>
          <?php if (!empty($author_picture)) : ?>
          <img class="img-fluid position-relative" src="<?php echo $author_picture; ?>" alt="" style="z-index: 1">
          <?php endif; ?>
          <div class="d-flex justify-content-around justify-content-xl-start">
            <div class="ms-xl-4">
              <ul class="list-unstyled mb-0 d-flex mt-5">
                <li class="d-flex me-2"><a class="p-1 bg-light transform-rotate-45deg" href="#"></a></li>
                <li class="d-flex me-2"><a class="p-1 bg-primary-dark transform-rotate-45deg" href="#"></a></li>
                <li class="d-flex me-2"><a class="p-1 bg-light transform-rotate-45deg" href="#"></a></li>
                <li class="d-flex"><a class="p-1 bg-light transform-rotate-45deg" href="#"></a></li>
              </ul>
            </div>
            <div class="d-flex ms-xl-44">
              <a class="btn btn-primary p-6 position-relative" href="#">
                <img class="img-fluid position-absolute start-50 top-50 translate-middle" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/icons/testimonials-arrow-left.svg" alt="">
              </a>
              <a class="btn btn-primary-dark p-6 position-relative" href="#">
                <img class="img-fluid position-absolute start-50 top-50 translate-middle" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/icons/testimonials-arrow-right.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>