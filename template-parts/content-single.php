<section class="blog-posts grid-system">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <?php if (has_post_thumbnail()): the_post_thumbnail('full'); endif; ?>
                </div>
                <div class="down-content">
                  <span><?php the_category(); ?></span>
                  <a href="<?php the_permalink() ?>">
                    <h4><?php the_title(); ?></h4>
                  </a>
                  <ul class="post-info">
                    <li><a href="#"><?php the_author(); ?></a></li>
                    <li><a href="#"><?= get_the_date('M d, Y'); ?></a></li>
                    <li><a href="#">
                        <?php
                        if (get_comments_number()) : comments_number();
                        else:
                          echo '0 Comments';
                        endif;
                      ?>
                      </a></li>
                  </ul>
                  <?php the_content('<p>', '</p>'); ?>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#"><?php the_tags(); ?></a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#"> Twitter</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <?php get_sidebar() ?>
      </div>

      <?php comments_template() ?>
      <?php wp_list_comments() ?>

    </div>
</section>