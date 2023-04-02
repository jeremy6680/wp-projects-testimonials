<?php

get_header(); ?>
 
 <section class="py-24 bg-white position-relative">
  <div class="position-relative container" style="z-index: 1;">
    <div>
      <span class="text-uppercase text-primary fw-bold">Our works</span>
      <h1 class="mb-0 lh-sm"><?php echo get_the_archive_title(); ?></h1>
      <ul class="mt-16 list-unstyled mb-0 d-md-flex flex-wrap">
        <?php echo WPPT_Helper::generate_project_type_filter_buttons(); ?>
      </ul>
    </div>



<!--


    <div class="row" id="photo-gallery">
  <figure class="col-3 picture-item" data-groups='["animal"]'>
    <div class="aspect">
      <img src="https://images.unsplash.com/uploads/141310026617203b5980d/c86b8baa?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=882e851a008e83b7a80d05bdc96aa817" alt="A close, profile view of a crocodile looking directly into the camera" />
    </div>
    <figcaption>Crocodile</figcaption>
  </figure>
  <figure class="col-3 picture-item" data-groups='["city"]'>
    <div class="aspect">
      <img src="https://images.unsplash.com/photo-1484402628941-0bb40fc029e7?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=6237e62a10fa079d99b088b0db0144ac" alt="A multi-level highway stack interchange in Puxi, Shanghai" />
    </div>
    <figcaption>Crossroads</figcaption>
  </figure>
  <figure class="col-3 picture-item" data-groups='["nature","city"]'>
    <div class="aspect">
      <img
        src="https://images.unsplash.com/uploads/1413142095961484763cf/d141726c?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=86dc2dcb74588b338dfbb15d959c5037"
        alt="Looking down on central park and the surrounding builds from the Rockefellar Center"
      />
    </div>
    <figcaption>Central Park</figcaption>
  </figure>
  <div class="col-1 js-shuffle-sizer"></div>
</div>


-->



    <div class="container mt-3">
  <h1 class="mb-3">Bootstrap 4 grid and filters with <a href="https://vestride.github.io/Shuffle/" target="_blank" rel="noopener">Shuffle</a></h1>
  <div class="row">
    <div class="col">
      <p class="mb-1">Filters:</p>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col">
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-outline-primary active">
          <input type="radio" name="shuffle-filter" value="all" checked="checked">All
        </label>
        <label class="btn btn-outline-primary">
          <input type="radio" name="shuffle-filter" value="nature">Nature
        </label>
        <label class="btn btn-outline-primary">
          <input type="radio" name="shuffle-filter" value="fruit">Fruit
        </label>
        <label class="btn btn-outline-primary">
          <input type="radio" name="shuffle-filter" value="architecture">Architecture
        </label>
      </div>
    </div>
  </div>
  <div class="row my-shuffle shuffle" style="height: 356.25px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
    <figure class="image-item col-3 shuffle-item shuffle-item--visible" data-groups="[&quot;nature&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; transform: translate(0px, 0px) scale(1);">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/uploads/141310026617203b5980d/c86b8baa?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=882e851a008e83b7a80d05bdc96aa817" obj.alt="obj.alt"></div>
      </div>
    </figure>
    <figure class="image-item col-3 shuffle-item shuffle-item--visible" data-groups="[&quot;nature&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(135px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1484402628941-0bb40fc029e7?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=6237e62a10fa079d99b088b0db0144ac" obj.alt="obj.alt"></div>
      </div>
    </figure>
    <figure class="image-item col-3 shuffle-item shuffle-item--visible" data-groups="[&quot;nature&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(270px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/uploads/1413142095961484763cf/d141726c?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=86dc2dcb74588b338dfbb15d959c5037" obj.alt="obj.alt"></div>
      </div>
    </figure>
    <figure class="image-item col-3 shuffle-item shuffle-item--visible" data-groups="[&quot;architecture&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(405px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1465414829459-d228b58caf6e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=7ab1744fe016fb39feb2972244246359" obj.alt="obj.alt"></div>
      </div>
    </figure>
    <figure class="image-item col-3 shuffle-item shuffle-item--visible" data-groups="[&quot;nature&quot;,&quot;architecture&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(0px, 89px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
      <div class="aspect aspect--9x80">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1416184008836-5486f3e2cf58?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=601&amp;h=676&amp;fit=crop&amp;s=5f1f1ffba05979d4248cc16d8eb82f0a" obj.alt="obj.alt"></div>
      </div>
    </figure>
    <figure class="image-item col-3 shuffle-item shuffle-item--visible" data-groups="[&quot;nature&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(135px, 89px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1478033394151-c931d5a4bdd6?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=57a00aabcfaa1b04fd268ea3ad4a4cbb" obj.alt="obj.alt"></div>
      </div>
    </figure>
    <figure class="image-item col-6 shuffle-item shuffle-item--visible" data-groups="[&quot;nature&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(270px, 89px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
      <div class="aspect aspect--32x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1473175494278-d83ed8459089?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1208&amp;h=338&amp;fit=crop&amp;s=fd1cf1e8eddf88ef87015314f85ce3fb" obj.alt="obj.alt"></div>
      </div>
    </figure>
    <figure class="image-item col-3 shuffle-item shuffle-item--visible" data-groups="[&quot;nature&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(135px, 178px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1434144893279-2a9fc14e9337?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=d2f930bbb91de7e19e6436f5b03897b0" obj.alt="obj.alt"></div>
      </div>
    </figure>
    <figure class="image-item col-3 shuffle-item shuffle-item--visible" data-groups="[&quot;fruit&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(270px, 179px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1464454709131-ffd692591ee5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=eda14f45e94e9024f854b1e06708c629" obj.alt="obj.alt"></div>
      </div>
    </figure>
    <figure class="image-item col-3 shuffle-item shuffle-item--visible" data-groups="[&quot;nature&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(405px, 179px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1482192596544-9eb780fc7f66?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=70dabb0dcc604c558245b72f3109bbbb" obj.alt="obj.alt"></div>
      </div>
    </figure>
    <figure class="image-item col-3 shuffle-item shuffle-item--visible" data-groups="[&quot;nature&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(0px, 267px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1447433589675-4aaa569f3e05?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=4e19022724205e38e491961f50e47d32" obj.alt="obj.alt"></div>
      </div>
    </figure>
    <figure class="image-item col-3 shuffle-item shuffle-item--visible" data-groups="[&quot;nature&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(135px, 267px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
      <div class="aspect aspect--16x9">
        <div class="aspect__inner"><img src="https://images.unsplash.com/photo-1430026996702-608b84ce9281?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=363a88755a7b87635641969a8d66f7aa" obj.alt="obj.alt"></div>
      </div>
    </figure>
    <div class="col-1 my-sizer-element"></div>
  </div>
</div>






          <?php
        if ( have_posts() ) : ?>
        <div class="row my-shuffle shuffle" data-isotope='{ "itemSelector": ".grid-item", "masonry": { "columnWidth": 200 } }'>
          <?php
          while ( have_posts() ) :
              the_post(); ?>
          
              <?php
                /**
                 * This code includes a WordPress template part for a project tease.
                 *
                 * @param string $template The name of the template file to include.
                 * @param string $slug     The slug of the template file to include.
                 *
                 * @return void
                 */
                wppt_get_template_part('templates/partials/project-tease', 'template' ); 
                ?>
          
          <?php
          endwhile; ?>
        </div>
        <?php 
        else:
        // If no content, display a message
        endif;
      ?>

  <div class="text-center"><a class="btn btn-dark d-block d-md-inline-block" href="#">Show More</a></div>
  
  </div>
  <div class="p-20 p-md-40 position-absolute mt-80 top-0 end-0 bg-warning-light"></div>
  <div class="p-20 p-md-40 position-absolute mb-48 bottom-0 end-0 bg-info-light"></div>
  <div class="p-20 p-md-40 position-absolute mb-48 top-50 start-0 translate-middle-y mt-12 bg-secondary-light"></div>
</section>

  <?php
  /**
    * Checks if the CTA checkbox is checked.
    * If is checked, displays the cta section.
    */
  $display_cta = get_option('wppt-display-cta');
  if (!empty($display_cta)) { 
    wppt_get_template_part('templates/partials/cta', 'template');
  } ?>

<?php get_footer();