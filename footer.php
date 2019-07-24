<footer>
  <div class="container pt-3 pb-3">
    <div class="row">
      <div class="col footercol">
        <div style="text-align:center;">
          <h5 class="footer-head">Sitemap</h5>
        </div>
        <?php wp_nav_menu (array(
              'theme_location' => 'footer-menu',
              'menu_class' => 'navigation'
            ))
          ?>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer();?>
</body>
</html>
