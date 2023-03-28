<?php
$cta_title = get_option('wppt-cta-title');
$cta_text = get_option('wppt-cta-text');
$cta_button_title = get_option('wppt-cta-button-title');
$cta_button_link = get_option('wppt-cta-button-link');
?>
<section class="promo-section bg-dark py-5 my-48 text-center">
  <div class="container mx-auto max-width-lg">
    <h2 class="title text-light"><?php if (!empty($cta_title) ) { echo $cta_title; } ?></h2>
    <p class="text-light"><?php if (!empty($cta_text) ) { echo $cta_text; } ?></p>
    <div class="text-center"><a class="btn btn-primary" href="<?php if (!empty($cta_button_link) ) { echo $cta_button_link; } ?>"><i class="fas fa-paper-plane me-2"></i><?php if (!empty($cta_button_title) ) { echo $cta_button_title; } ?></a></div>
  </div><!--//container-->
</section><!--//promo-section--> 