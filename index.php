<?php get_header(); ?>
<main>
  <!------- firstview ------->
  <div class="firstview">
    <img src="<?php echo get_template_directory_uri(); ?>/img/media__firstview-sp.svg" alt="" class="firstview__img--sp">
    <img src="<?php echo get_template_directory_uri(); ?>/img/media__firstview.png" alt="" class="firstview__img--pc">
    <h1 class="firstview__ttl">Commit to the growth<br>for everyone</h1>
  </div>
  <!------- newpost ------->
  <div class="newpost">
    <div class="newpost__ttl">
      <div class="newpost__ttl--en">New Post</div>
      <div class="newpost__ttl--ja">新着記事</div>
    </div>
    <div class="index__column">
      <div class="newpost__article index__left-column">
        <div class="index__left-columntop">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="newpost__item">
                <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img" class="newpost__item--noimage">
                  <?php endif; ?>
                  <?php if (!is_category() && has_category()) : ?>
                    <div class="newpost__item--tag">
                      <?php $postcat = get_the_category();
                      echo $postcat[0]->name;
                      ?>
                    </div>
                  <?php endif; ?>
                  <div class="newpost__item--ttl">
                    <?php
                      if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                      $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                      echo $title . '…';
                      } else {
                      echo $post->post_title;
                      }
                    ?>
                  </div>
                  <div class="newpost__item--date"><?php echo get_the_date('Y-m-d'); ?>
                  </div>
                </a>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <p>投稿が見つかりません。</p>
          <?php endif; ?>


        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>