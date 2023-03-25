<?php
get_header(); 
?>

<div class="hero hero-sm bg-dark">
  <div class="hero-body container">
    <h1>Case Study: Project Name</h1>
    <p class="lead">Project intro goes here. In the intro it's a good idea to answer a potential client's need/problem so it's more likely to land your next project or job.</p>
  </div>
</div>



  <div class="container">
    <div class="card client-card bg-secondary d-flex">
      <div class="card-image p-2" style="flex-basis: 33%;">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('medium', array('class' => 'img-responsive')); } ?>
      </div>
      <div class="card-body" style="flex-basis: 67%;">
        <div class="card-header px-0">
          <h3 class="card-title client-name">Client Name</h3>
        </div>
        <ul class="client-meta">
          <li><i class="fas fa-industry fa-fw"></i> <strong>Industry:</strong> Tech</li>
          <li><i class="fas fa-users fa-fw"></i> <strong>Size:</strong> 100+</li>
          <li><i class="fas fa-link fa-fw"></i> <strong>Website:</strong> <a class="text-secondary" href="#">clientsite.com</a></li>
        </ul>
        <div class="client-bio my-2">
          <p>Short description of the client and project requirements. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-4">
    <div class="card">
      <div class="card-body">
      <?php
        $project_description = get_post_meta( get_the_ID(), 'wysiwyg_projectdescription', true );
        if ( ! empty( $project_description ) ) {
        echo wpautop( $project_description ); // wpautop adds HTML paragraph tags
        }
        ?>
      </div>
    </div>
  </div>

<div class="project-section mb-5 container">
  <h3 class="project-section-title mb-3">Client Testimonial</h3>
</div><!--//project-section-->
<div class="card client-quote container bg-secondary">
  <div class="card-body">
    <blockquote class="quote-content">
      Simon is a brilliant software engineer! Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.
    </blockquote>
    <i class="fas fa-quote-left"></i>
  </div><!--//card-body-->
  <div class="card-footer">
    <div class="client-meta">
      <div class="source-profile">
        <img src="assets/images/clients/profile-4.png" alt="image" class="avatar"/>
      </div>
      <div class="meta">
        <div class="name">James Lee</div>
        <div class="info">Product Manager, Amazon</div>
      </div>
    </div><!--//client-meta-->
  </div><!--//card-footer-->
</div><!--//client-quote-->

	    
<section class="promo-section bg-dark py-5 my-48 text-center">
  <div class="container mx-auto max-width-lg">
    <h2 class="title text-light">Want me to help with your project?</h2>
    <p class="text-light">If you take on freelance work, you can use this section to prompt any potential clients to get in touch with you with their project requirements.</p>
    <div class="text-center"><a class="btn btn-primary" href="contact.html" target="_blank"><i class="fas fa-paper-plane me-2"></i>Hire Me</a></div>
  </div><!--//container-->
</section><!--//promo-section--> 

<?php get_footer();