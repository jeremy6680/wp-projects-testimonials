<?php
$cta_title = get_option('wppt-cta-title');
$cta_text = get_option('wppt-cta-text');
$cta_button_title = get_option('wppt-cta-button-title');
$cta_button_link = get_option('wppt-cta-button-link');
?>

<section class="py-24 bg-white">
  <div class="container">
    <div class="py-10 px-12 bg-dark">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-xl-auto mb-6 mb-xl-0">
          <h2 class="mw-sm lh-sm text-white font-heading"><?php if (!empty($cta_title) ) { echo $cta_title; } ?></h2>
        </div>
        <div class="col-12 col-md-6 col-xl-auto mb-6 mb-xl-0">
          <p class="mw-sm lh-lg text-light"><?php if (!empty($cta_text) ) { echo $cta_text; } ?></p>
        </div>
        <div class="col-12 col-md-auto mx-auto me-xl-0 ms-xl-auto"><a class="btn btn-primary" href="<?php if (!empty($cta_button_link) ) { echo $cta_button_link; } ?>"><?php if (!empty($cta_button_title) ) { echo $cta_button_title; } ?></a></div>
      </div>
    </div>
  </div>
</section>