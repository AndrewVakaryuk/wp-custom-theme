<?php
/*
Template Name: About us
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
                        <h2>MORE ABOUT US!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Display content -->
<section class="about-us">
    <div class="container">
       <?php the_content(); ?>
    </div>
</section>

<div class="row">
  <div class="col-lg-12">
    <div class="row-social">
      <ul class="social-icons">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-behance"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</div>

<?php get_footer() ?>