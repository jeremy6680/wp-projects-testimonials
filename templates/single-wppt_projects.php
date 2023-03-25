<?php

get_header(); 
$img_folder = WP_PLUGIN_URL.'/assets/images/';
?>
   <div class="container">
    <div class="columns">
      <div class="column col-12">
        <h1>Project Title</h1>
        <p>Project Description</p>
      </div>
    </div>
    <div class="columns">
      <div class="column col-6">
		<?php the_post_thumbnail(); ?>
      </div>
      <div class="column col-6">
        <blockquote>
          <p>"Customer Testimonial"</p>
          <cite>- Customer Name</cite>
        </blockquote>
      </div>
    </div>
    <div class="columns">
      <div class="column col-12">
        <h2>Project Details</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod urna eu mi consectetur mollis. Etiam quis ex semper, commodo velit vitae, pellentesque lorem. Ut imperdiet nunc elit, sed laoreet odio commodo vel. Suspendisse a ante et libero feugiat scelerisque sed vitae lorem. </p>
      </div>
    </div>
    <div class="columns">
      <div class="column col-12">
        <a href="contact.html" class="btn btn-primary">Are you interested? Contact me now!</a>
      </div>
    </div>
  </div>
 
<?php get_footer(); ?>