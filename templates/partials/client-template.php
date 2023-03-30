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

<section class="overflow-hidden">
  <div class="container">
    <div class="d-md-flex">
      <div class="bg-success2-light px-6 px-md-14 py-14 py-xl-20 px-xl-24 mb-14 mw-md-sm mw-lg-lg mw-xl-2xl">
        <h2 class="mb-7 lh-sm">
          <span contenteditable="false">Client: <?php echo esc_html($name); ?></span>
        </h2>
        <p class="lh-lg mw-md-md">
        <?php
            if (!empty($industry)) {
                echo '<span><strong>Industry:</strong> ' . esc_html($industry) . '</span><br/>';
            }
            if (!empty($website)) {
                echo '<span><strong>Website:</strong> <a href="' . esc_html($website) . '">' . esc_html($website) . '</a></span><br/>';
            }
            if (!empty($size)) {
                echo '<span><strong>Size:</strong> ' . esc_html($size) . '</span><br/>';
            }
            ?>
        </p>
        <p class="mb-6 lh-lg mw-md-md">
        <?php
        if (!empty($description)) {
            echo wpautop($description);
        } ?>
        </p>
      </div>
      <div class="position-relative mw-sm w-100 ms-auto ms-xl-0 ps-md-8 ps-xl-6">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('full', array('class' => 'img-fluid mt-xl-36 ms-xl-n28')); } ?>
        <a class="d-block" href="#">
        <img class="position-absolute me-10 mb-10 bottom-0 end-0 img-fluid" src="<?php echo plugin_dir_url(__DIR__); ?>assets/pstls-assets/images/headers/header-3-scroll.png" alt=""></a>
      </div>
    </div>
  </div>
</section>



    
