<?php

get_header(); ?>
 
 <div class="container">
    <div class="columns">
      <div class="column col-12">
        <h1>My Projects</h1>
      </div>
    </div>
    <div class="columns">
      <div class="column col-12">
        <div class="btn-group">
          <button class="btn btn-primary filter" data-category="all">All</button>
          <button class="btn btn-primary filter" data-category="category1">Category 1</button>
          <button class="btn btn-primary filter" data-category="category2">Category 2</button>
          <button class="btn btn-primary filter" data-category="category3">Category 3</button>
        </div>
      </div>
    </div>
    <div class="columns projects-grid">
      <div class="column col-4 project category1">
        <div class="card">
          <div class="card-image">
            <img src="https://placehold.co/600x400" class="img-responsive">
          </div>
          <div class="card-header">
            <div class="card-title h5">Project 1</div>
            <div class="card-subtitle text-gray">Category 1</div>
          </div>
          <div class="card-body">
            <p>Project 1 description</p>
          </div>
          <div class="card-footer">
            <a href="project1.html" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
      <div class="column col-4 project category2">
        <div class="card">
          <div class="card-image">
            <img src="https://placehold.co/600x400" class="img-responsive">
          </div>
          <div class="card-header">
            <div class="card-title h5">Project 2</div>
            <div class="card-subtitle text-gray">Category 2</div>
          </div>
          <div class="card-body">
            <p>Project 2 description</p>
          </div>
          <div class="card-footer">
            <a href="project2.html" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
      <div class="column col-4 project category3">
        <div class="card">
          <div class="card-image">
            <img src="https://placehold.co/600x400" class="img-responsive">
          </div>
          <div class="card-header">
            <div class="card-title h5">Project 3</div>
            <div class="card-subtitle text-gray">Category 3</div>
          </div>
          <div class="card-body">
            <p>Project 3 description</p>
          </div>
          <div class="card-footer">
            <a href="project3.html" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
      <div class="column col-4 project category1">
        <div class="card">
          <div class="card-image">
            <img src="https://placehold.co/600x400" class="img-responsive">
          </div>
          <div class="card-header">
            <div class="card-title h5">Project 1</div>
            <div class="card-subtitle text-gray">Category 1</div>
          </div>
          <div class="card-body">
            <p>Project 1 description</p>
          </div>
          <div class="card-footer">
            <a href="project1.html" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
      <div class="column col-4 project category2">
        <div class="card">
          <div class="card-image">
            <img src="https://placehold.co/600x400" class="img-responsive">
          </div>
          <div class="card-header">
            <div class="card-title h5">Project 2</div>
            <div class="card-subtitle text-gray">Category 2</div>
          </div>
          <div class="card-body">
            <p>Project 2 description</p>
          </div>
          <div class="card-footer">
            <a href="project2.html" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
      <div class="column col-4 project category3">
        <div class="card">
          <div class="card-image">
            <img src="https://placehold.co/600x400" class="img-responsive">
          </div>
          <div class="card-header">
            <div class="card-title h5">Project 3</div>
            <div class="card-subtitle text-gray">Category 3</div>
          </div>
          <div class="card-body">
            <p>Project 3 description</p>
          </div>
          <div class="card-footer">
            <a href="project3.html" class="btn btn-primary">Learn more</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="filter">
  <input type="radio" id="tag-0" class="filter-tag" name="filter-radio" hidden checked>
  <input type="radio" id="tag-1" class="filter-tag" name="filter-radio" hidden>
  <input type="radio" id="tag-2" class="filter-tag" name="filter-radio" hidden>

  <div class="filter-nav">
    <label class="chip" for="tag-0">All</label>
    <label class="chip" for="tag-1">Action</label>
    <label class="chip" for="tag-2">Roleplaying</label>
  </div>

  <div class="filter-body">
    <div class="filter-item card" data-tag="tag-1">
      <!-- Filter item content -->
    </div>
    <div class="filter-item card" data-tag="tag-2">
      <!-- Filter item content -->
    </div>
    <!-- Filter items -->
  </div>
</div>
<?php get_footer(); ?>