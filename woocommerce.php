<?php get_header(); ?>
<main>
<div class="container">
  <div class="row">
    <?php if (WC()->cart->get_cart_contents_count() == 0 ): ?>
      <div class="col">
        <?php woocommerce_content(); ?>
      <div>
    <?php else: ?>
      <div class="col-md-9">
        <?php woocommerce_content(); ?>
      </div>
      <div class="col-md-3">
        <?php get_sidebar(); ?>
      </div>
    <?php endif; ?>
  </div>
</div>
</main>
<?php get_footer(); ?>

<!--<div id="content" class="col-lg-12 col-sm-6 col-md-6 col-xs-12">
  woocommerce_content();
</div>-->
