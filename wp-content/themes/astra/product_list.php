<?php
/*
Template Name: Product Listing

*/
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

get_header(); ?>
<?php if ( astra_page_layout() == 'left-sidebar' ) { ?>

  <?php get_sidebar(); ?>

<?php } ?>

  <div id="primary" <?php astra_primary_class(); ?>>
    <div class="container" style="max-width: 1140px;">
      <div class="product-list-main">
        <div class="filter-buttons">
          <div class="list-view-button"><i class="fa fa-bars" aria-hidden="true"></i> List view</div>
          <div class="grid-view-button"><i class="fa fa-th-large" aria-hidden="true"></i> Grid view</div>
        </div>

        <ol class="list list-view-filter product-info-wrapper">
          <a href="#" class="image-with-date">
            <div class="image">
              <img src="http://localhost/rotary/wp-content/uploads/2025/02/single-post-img-2.jpg">
              <div class="date">
                <span>24 October</span>
              </div>
            </div>
            <div class="heading">
              <h3>A14 Single Post Template For Elementor</h3>
            </div>
            <div class="description">
              <p>Single Post Template</p>
            </div>
          </a>
          <a href="#" class="image-with-date">
            <div class="image">
              <img src="http://localhost/rotary/wp-content/uploads/2025/02/single-post-img.jpg">
              <div class="date">
                <span>24 October</span>
              </div>
            </div>
            <div class="heading">
              <h3>A14 Single Post Template For Elementor</h3>
            </div>
            <div class="description">
              <p>Single Post Template</p>
            </div>
          </a>
          <a href="#" class="image-with-date">
            <div class="image card-img-top m-0 overflow-hidden bsb-overlay-hover">
              <img class="img-fluid bsb-scale bsb-hover-scale-up" src="http://localhost/rotary/wp-content/uploads/2025/02/single-post-img-2.jpg" loading="lazy">
              <figcaption>
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                </svg>
                <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">Read More</h4>
              </figcaption>
            
              <div class="date">
                <span>24 October</span>
              </div>
            </div>
            <div class="heading">
              <h3>A14 Single Post Template For Elementor</h3>
            </div>
            <div class="description">
              <p>Single Post Template</p>
            </div>
          </a>



          <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
    <img class="img-fluid bsb-scale bsb-hover-scale-up" loading="lazy" 
         src="https://cdn.pixabay.com/photo/2024/08/11/18/15/leaves-8962041_640.jpg" 
         alt="Business">
    <figcaption>
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" 
             class="bi bi-eye text-white bsb-hover-fadeInLeft" viewBox="0 0 16 16">
            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1 7 0z"></path>
        </svg>
        <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">Read More</h4>
    </figcaption>
</figure>



          <li>List item 2</li>
          <li>List item 3</li>
          <li>List item 4</li>
          <li>List item 5</li>
          <li>List item 6</li>
        </ol>
      </div>
    </div>
  </div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) { ?>

  <?php get_sidebar(); ?>

<?php } ?>

<?php get_footer(); ?>
