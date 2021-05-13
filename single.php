<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>
<main>
  <!------- single-page ------->
  <div class="single">
    <div class="single-container">
      <div class="single-header__contain">
        <a href="single.html">
          <?php if (has_category()) : ?>
            <div class="single-header__tag">
              <?php echo get_the_category_list(' '); ?>
            </div>
            <?php endif; ?>
        </a>
        <h1 class="single-header__ttl">
          <?php the_title(); ?>
        </h1>
        <p class="single-header__date">
          <?php echo get_the_date('Y-m-d'); ?>
        </p>
      </div>
      <div class="single__img">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
      </div>
    <?php endif; ?>
    <div class="single__maintxt">
      <?php the_content(); ?>
    </div>
  <?php endif; ?>

    </div>


</main>
<?php get_footer(); ?>