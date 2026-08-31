<?php
/**
 * Title: Quick Shopping Links
 * Slug: zenvora/quick-links
 * Categories: zenvora-store
 * Description: Compact discovery chips — Trending, New, Best Sellers, Top Rated, Sale, Featured.
 */
$zv_links = array(
	'Trending Now'  => 'orderby=popularity',
	'New Arrivals'  => 'orderby=date',
	'Best Sellers'  => 'orderby=popularity',
	'Top Rated'     => 'orderby=rating',
	'On Sale'       => 'on_sale=1',
	'Featured'      => 'featured=1',
);
?>
<!-- wp:group {"align":"wide","className":"zv-quick-links-grid","style":{"spacing":{"padding":{"top":"2rem"}}},"layout":{"type":"grid","columnCount":6}} -->
<div class="wp-block-group alignwide zv-quick-links-grid" style="padding-top:2rem">
	<?php foreach ( $zv_links as $zv_label => $zv_query ) : ?>
	<!-- wp:group {"className":"zv-quick-chip","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group zv-quick-chip has-surface-background-color has-background">
		<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
		<p class="has-text-align-center has-small-font-size"><a href="<?php echo zenvora_get_shop_link( $zv_query ); ?>"><?php echo esc_html( $zv_label ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<?php endforeach; ?>
</div>
<!-- /wp:group -->
