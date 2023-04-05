<?php
    $project_overview_title = get_post_meta( get_the_ID(), 'wppt_overview_title', true );
    $project_overview_text = get_post_meta( get_the_ID(), 'wppt_overview_text', true );
    $wppt_challenge_text = get_post_meta( get_the_ID(), 'wppt_challenge_text', true );
    $wppt_approach_text = get_post_meta( get_the_ID(), 'wppt_approach_text', true );
    $wppt_solution_text = get_post_meta( get_the_ID(), 'wppt_solution_text', true );
    $wppt_results_text = get_post_meta( get_the_ID(), 'wppt_results_text', true );
    
  ?>
  
  <section class="py-28 py-xl-52 bg-white overflow-hidden"><div class="container">
  <div class="row align-items-center">
    <div class="col-12 col-md-6">
      <div class="mw-sm mw-md-lg mx-auto mx-xl-0">
        <h2 class="mb-9 display-5 lh-sm font-heading"><?php
        if ( ! empty( $project_overview_title ) ) {
        echo $project_overview_title; // wpautop adds HTML paragraph tags
        } 
        ?></h2>
        <p class="mb-14 mw-md lh-lg"><?php
        if ( ! empty( $project_overview_text ) ) {
        echo $project_overview_text; // wpautop adds HTML paragraph tags
        } 
        ?></p>
      </div>
    </div>
    <div class="mt-16 mt-md-0 col-12 col-md-6">
      <div class="position-relative">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary-light mt-8 ms-8">
          <img class="img-fluid" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/images/features/shadow-photo.png" alt=""></div>
        <img class="position-relative img-fluid w-100" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/images/features/features-8-room.png" alt=""></div>
    </div>
  </div>
  </div>
</section>

<section class="py-24 pt-md-48 text-white overflow-hidden">
  <div class="container">
    <div class="bg-dark pb-24 pt-16 ms-auto position-relative">
      <div class="position-xl-absolute start-0 mt-n40 ms-xl-n52">
        <img class="img-fluid d-block mx-auto mw-sm" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/images/features/features-women.png" alt="">
      </div>
      <div class="mw-md-lg d-none d-xl-block px-64 py-80 bg-primary-light position-xl-absolute top-0 end-0 me-xl-n52 mt-n48" style="z-index: -1;"></div>
      <div class="mw-3xl mw-xl-5xl mx-auto ms-xl-auto me-xl-n20 mt-12 mt-xl-0 px-10 px-xl-32">
        <div class="row justify-content-xl-end">
          <div class="col-12 col-md-8 col-xl-10">
            <h2 class="text-white lh-base font-heading">Lorem ipsum dolor sit amet conscetutar domor at elis</h2>
          </div>
        </div>
        <div class="row justify-content-end mt-12">
          <div class="col-12 col-md-6 col-xl-5 mb-10">
            <img class="img-fluid" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/icons/document-clean.svg" alt="">
            <h5 class="mt-8 mb-4 fw-normal text-white font-heading">The Challenge</h5>
            <p class="lead lh-lg mt-6 text-muted"><?php
        if ( ! empty( $wppt_challenge_text ) ) {
        echo $wppt_challenge_text; // wpautop adds HTML paragraph tags
        } 
        ?></p>
          </div>
          <div class="col-12 col-md-6 col-xl-5 mb-10">
            <img class="img-fluid" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/icons/check-circle.svg" alt="">
            <h5 class="mt-8 mb-4 fw-normal text-white font-heading">The Approach</h5>
            <p class="lead lh-lg mt-6 text-muted"><?php
        if ( ! empty( $wppt_approach_text ) ) {
        echo $wppt_approach_text; // wpautop adds HTML paragraph tags
        } 
        ?>.</p>
          </div>
          <div class="col-12 col-md-6 col-xl-5 mb-10 mb-lg-0">
            <img class="img-fluid" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/icons/filters-1.svg" alt="">
            <h5 class="mt-8 mb-4 fw-normal text-white font-heading">The Solution</h5>
            <p class="lead lh-lg mt-6 text-muted"><?php
        if ( ! empty( $wppt_solution_text ) ) {
        echo $wppt_solution_text; // wpautop adds HTML paragraph tags
        } 
        ?></p>
          </div>
          <div class="col-12 col-md-6 col-xl-5">
            <img class="img-fluid" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/icons/users.svg" alt="">
            <h5 class="mt-8 mb-4 fw-normal text-white font-heading">The results</h5>
            <p class="lead lh-lg mt-6 text-muted"><?php
        if ( ! empty( $wppt_results_text ) ) {
        echo $wppt_results_text; // wpautop adds HTML paragraph tags
        } 
        ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  
<section class="py-28 position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-3 mb-8 mb-lg-0">
        <div class="position-relative">
          <div class="d-flex justify-content-center">
            <img class="img-fluid" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/images/stats/background1.png" alt="">
          </div>
          <div class="text-center position-absolute top-50 start-50 translate-middle">
            <p class="mb-1 fw-bold text-primary small">Subscribers</p>
            <h2 class="mb-0 lh-sm">12 350</h2>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 mb-8 mb-lg-0">
        <div class="position-relative">
          <div class="d-flex justify-content-center">
            <img class="img-fluid" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/images/stats/background4.png" alt="">
          </div>
          <div class="text-center position-absolute top-50 start-50 translate-middle">
            <p class="mb-1 fw-bold text-secondary small">Projects</p>
            <h2 class="mb-0 lh-sm">5 065</h2>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 mb-8 mb-sm-0">
        <div class="position-relative">
          <div class="d-flex justify-content-center">
            <img class="img-fluid" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/images/stats/background3.png" alt="">
          </div>
          <div class="text-center position-absolute top-50 start-50 translate-middle">
            <p class="mb-1 fw-bold text-danger small">Files</p>
            <h2 class="mb-0 lh-sm">12 350</h2>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="position-relative">
          <div class="d-flex justify-content-center">
            <img class="img-fluid" src="<?php echo plugins_url( 'wp-projects-testimonials' ); ?>/assets/pstls-assets/images/stats/background2.png" alt="">
          </div>
          <div class="text-center position-absolute top-50 start-50 translate-middle">
            <p class="mb-1 fw-bold text-warning small">Tasks</p>
            <h2 class="mb-0 lh-sm">12 350</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>