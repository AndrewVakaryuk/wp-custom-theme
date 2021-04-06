<?php ?>

<div class="col-lg-12">
  <div class="blog-post">
    <div class="blog-thumb">
      <?php
        if (has_post_thumbnail()): the_post_thumbnail(); endif; ?>
    </div>
    <div class="down-content">
      <span><?php the_category(); ?></span>
      <!-- <span>Lifestyle</span> -->
      <a href="<?php the_permalink() ?>"><h4><?php the_title(); ?></h4></a>
      <ul class="post-info">
        <li><a href="#"><?php the_author(); ?></a></li>
        <li><a href="#"><?= get_the_date('M d, Y'); ?></a></li>
        <li><a href="#">
          <?php
            if(get_comments_number( )) : comments_number();
            else:
              echo '0 Comments';
            endif;
          ?>
        </a></li>
      </ul>
      <?php the_excerpt(); ?>
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