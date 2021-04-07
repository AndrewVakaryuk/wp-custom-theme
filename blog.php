<?php
/*
Template Name: RECENT POSTS
*/
?>

<?php get_header(); ?>

<!-- Banner Starts Here -->
<div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            <?php the_title('<h4>', '</h4>') ?>
            <h2>OUR RECENT BLOG ENTRIES</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

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
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$params = array(
    'posts_per_page' => 1, 
    'paged'           => $current_page 
);
query_posts($params);
 
$wp_query->is_archive = true;
$wp_query->is_home = false;
 
if (have_posts()) :
  while (have_posts()) :
    the_post();
    get_template_part('template-parts/content-blogs');

  endwhile;
    the_posts_navigation();
else :
  get_template_part('template-parts/content', 'none');

endif;

the_posts_pagination()
?>

<?php get_footer() ?>