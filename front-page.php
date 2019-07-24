<?php get_header(); ?>
<img class="frontpageimg" src="<?php the_post_thumbnail_url(); ?>" alt="Front Page Img" />
<main>
  <div class="container">
    <div class="row">
      <?php if (WC()->cart->get_cart_contents_count() == 0 ): ?>
        <div class="col">
          <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      <?php else: ?>
        <div class="col-md-9">
          <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
         <div class="col-md-3">
          <?php get_sidebar(); ?>
        </div>
      <?php endif; ?>
    </div>
</div>
</main>
<?php get_footer(); ?>
