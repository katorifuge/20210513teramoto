<?php get_header(); ?>
<main>
  <!------- category-ttl------->
  <div class="category__ttl">
    <a href="">
      <?php if (has_category()) : ?>
        <?php echo get_the_category_list(' '); ?>
  </div>
  </a>
<?php endif; ?>
<!------- category-item ------->
<div class="category">
  <div class="index__column">
    <div class="newpost__article index__left-column category__article">
      <div class="newpost__item">
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img" class="newpost__item--noimage">
          <?php endif; ?>
          <div class="newpost__item--ttl"><?php
                                          if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                                            $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                                            echo $title . '…';
                                          } else {
                                            echo $post->post_title;
                                          }
                                          ?></div>
          <div class="newpost__item--date"><?php echo get_the_date('Y-m-d'); ?></div>
        </a>
      </div>
    </div>
    <?php get_sidebar(); ?>
  </div>
</div>
</main>
<?php get_footer(); ?>