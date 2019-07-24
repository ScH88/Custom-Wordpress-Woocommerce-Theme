<?php if ( is_active_sidebar( 'right_sidebar' ) ) : ?>
  <!-- #primary-sidebar -->
	<div id="primary-sidebar" class="primary-sidebar widget-area bg-dark" role="complementary">
		<?php dynamic_sidebar( 'right_sidebar' ); ?>
	</div>
<?php endif; ?>
