<?php
get_header(); 
?>

<div class="hero hero-sm bg-dark">
  <div class="hero-body container">
    <h1>Case Study: <?php the_title(); ?></h1>
    <p class="lead"><?php the_excerpt(); ?></p>
  </div>
</div>

<div class="container">
  <?php wppt_get_template_part('templates/partials/client', 'template' ); ?>
</div>

<div class="container my-4">
  <?php wppt_get_template_part('templates/partials/project', 'template' ); ?>
</div>

<?php
// get the testimonial details for the project
$testimonial_details = WPPT_Helper::get_project_testimonial_details($post_id);

if (!empty($testimonial_details)) { ?>
  <div class="project-section mb-5 container">
    <h3 class="project-section-title mb-3">Client Testimonial</h3>
  </div><!--//project-section-->
<?php
$args = array(
  'testimonial_text' => isset($testimonial_details['textarea_text']) ? esc_html($testimonial_details['textarea_text']) : '',
  'author_name' => isset($testimonial_details['text_author']) ? esc_html($testimonial_details['text_author']) : '',
  'author_job' => isset($testimonial_details['text_job']) ? esc_html($testimonial_details['text_job']) : '',
  'author_picture' => isset($testimonial_details['media_picture']) ? $testimonial_details['media_picture'] : ''
);

wppt_get_template_part('templates/partials/testimonial', 'template', $args);
} ?>
	    
<section class="promo-section bg-dark py-5 my-48 text-center">
  <div class="container mx-auto max-width-lg">
    <h2 class="title text-light">Want me to help with your project?</h2>
    <p class="text-light">If you take on freelance work, you can use this section to prompt any potential clients to get in touch with you with their project requirements.</p>
    <div class="text-center"><a class="btn btn-primary" href="contact.html" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a></div>
  </div><!--//container-->
</section><!--//promo-section--> 

<?php get_footer();