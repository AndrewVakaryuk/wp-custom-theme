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

<?php get_footer() ?>