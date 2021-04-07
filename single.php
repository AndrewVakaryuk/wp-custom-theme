<?php

get_header();
?>
    <!-- Banner Starts Here -->
  <section class="page-heading">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="text-content">
                <h4>Posts Details</h4>
                <?php the_title('<h2>', '</h2>') ?>
              </div>
          </div>
      </div>
    </div>
  </section>

 <section class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="main-content">
          <div class="row">
            <div class="col-lg-8">
              <span>Stand Blog HTML5 Template</span>
              <h4>Creative HTML Template For Bloggers!</h4>
            </div>
            <div class="col-lg-4">
              <div class="main-button">
                <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/content', 'single');

            endwhile;
            the_posts_navigation();
        else :
            get_template_part('template-parts/content', 'none');

        endif;
        ?>
    

<?php
get_footer();