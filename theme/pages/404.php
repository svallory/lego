<div id="post-0" class="post error404 not-found">
	<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
  <div class="entry-content">
    <p>
    	<?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?>
    	<?php get_search_form(); ?>
  </div>

<?php // TODO: Check if this still has intended effect ?>
</div>
<script type="text/javascript">
  <!-- focus on search field after it has loaded -->
  document.getElementById('s') && document.getElementById('s').focus();
</script>