<?php get_header(); ?>
<main>
    <div class="container">
      <h1><?php the_title() ?></h1>
      <div class="row">
        <?php if ((WC()->cart->get_cart_contents_count() == 0) || (get_the_title() == "Basket" || get_the_title() == "Checkout")): ?>
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
