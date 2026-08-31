<?php
/**
 * Title: Popular Products (Tabbed)
 * Slug: zenvora/popular-products-tabs
 * Categories: zenvora-store
 * Description: New Arrivals / Best Sellers / Top Rated / On Sale tabs, each backed by a live WooCommerce Product Collection query.
 */
$zv_tabs = array(
	'new'  => array( 'label' => 'New Arrivals', 'orderby' => 'date',       'order' => 'DESC', 'on_sale' => false ),
	'best' => array( 'label' => 'Best Sellers',  'orderby' => 'popularity', 'order' => 'DESC', 'on_sale' => false ),
	'top'  => array( 'label' => 'Top Rated',     'orderby' => 'rating',     'order' => 'DESC', 'on_sale' => false ),
	'sale' => array( 'label' => 'On Sale',       'orderby' => 'date',       'order' => 'DESC', 'on_sale' => true ),
);
$zv_first = true;
?>
<!-- wp:group {"align":"wide","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}},"border":{"top":{"width":"1px","color":"var:preset|color|border"},"bottom":{"width":"1px","color":"var:preset|color|border"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-surface-background-color has-background">

	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontSize":"0.6875rem"}},"textColor":"accent"} -->
			<p class="has-accent-color has-text-color">Curated</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2>Popular Products</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<div class="zv-tabs" data-zv-tabs="popular-products" role="tablist">
			<?php foreach ( $zv_tabs as $zv_key => $zv_tab ) : ?>
			<button class="zv-tab-btn<?php echo ( 'new' === $zv_key ) ? ' is-active' : ''; ?>" data-tab="<?php echo esc_attr( $zv_key ); ?>" role="tab" aria-selected="<?php echo ( 'new' === $zv_key ) ? 'true' : 'false'; ?>">
				<?php echo esc_html( $zv_tab['label'] ); ?>
			</button>
			<?php endforeach; ?>
		</div>
		<!-- /wp:html -->
	</div>
	<!-- /wp:group -->

	<!-- wp:html --><div data-zv-tab-panel="popular-products"><!-- /wp:html -->

	<?php foreach ( $zv_tabs as $zv_key => $zv_tab ) : ?>
	<!-- wp:html -->
	<div class="zv-tab-panel<?php echo $zv_first ? ' is-active' : ''; ?>" data-tab-panel="<?php echo esc_attr( $zv_key ); ?>">
	<!-- /wp:html -->

	<!-- wp:woocommerce/product-collection {"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"<?php echo esc_attr( strtolower( $zv_tab['order'] ) ); ?>","orderBy":"<?php echo esc_attr( $zv_tab['orderby'] ); ?>","search":"","exclude":[],"inherit":false,"filterable":false<?php echo $zv_tab['on_sale'] ? ',"woocommerceOnSale":true' : ''; ?>},"displayLayout":{"type":"flex","columns":6},"style":{"spacing":{"blockGap":"1.25rem"}}} -->
	<div class="wp-block-woocommerce-product-collection">
		<!-- wp:woocommerce/product-template -->

			<!-- wp:group {"className":"zv-product-card","layout":{"type":"constrained"}} -->
			<div class="wp-block-group zv-product-card">

				<!-- wp:group {"className":"zv-media","layout":{"type":"constrained"}} -->
				<div class="wp-block-group zv-media">
					<!-- wp:woocommerce/product-image {"showSaleBadge":true,"saleBadgeAlign":"left"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","left":"1rem","right":"1rem","bottom":"1rem"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:post-terms {"term":"product_cat","fontSize":"x-small","textColor":"muted"} /-->
					<!-- wp:post-title {"isLink":true,"fontSize":"small","style":{"typography":{"fontWeight":"600"}}} /-->
					<!-- wp:woocommerce/product-rating {"productId":0} /-->
					<!-- wp:woocommerce/product-price {"className":"zv-price"} /-->
					<!-- wp:woocommerce/product-button {"textAlign":"center","style":{"border":{"radius":"2px"}},"className":"is-style-outline"} /-->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		<!-- /wp:woocommerce/product-template -->
	</div>
	<!-- /wp:woocommerce/product-collection -->

	<!-- wp:html --></div><!-- /wp:html -->
	<?php $zv_first = false; ?>
	<?php endforeach; ?>

	<!-- wp:html --></div><!-- /wp:html -->

</div>
<!-- /wp:group -->
