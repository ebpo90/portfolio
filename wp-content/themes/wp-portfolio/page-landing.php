
<?php get_header($landing);?>
<div id="primary landing">
<?php
do_action('wp_portfolio_loop_content');
?>

</div><!-- #primary -->
</div><!-- #content -->
<?php
/**
 * wp_portfolio_after_primary
 */
do_action('wp_portfolio_after_primary');
?>
