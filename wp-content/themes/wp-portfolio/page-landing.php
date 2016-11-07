
<?php get_header($landing);
// do_action('wp_portfolio_before_primary');
?>
<div id="primary landing">
	<p> soy yo </p>
<?php

// do_action('wp_portfolio_before_loop_content');

do_action('wp_portfolio_loop_content');

// do_action('wp_portfolio_after_loop_content');
?>
</div><!-- #primary -->
</div><!-- #content -->
<?php
/**
 * wp_portfolio_after_primary
 */
do_action('wp_portfolio_after_primary');
?>
<!-- <div id="secondary">
	<?php get_sidebar(); ?>
</div> -->
<?php get_footer(); ?>
