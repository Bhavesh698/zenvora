<?php
/**
 * Title: Featured Category Grid
 * Slug: zenvora/category-grid
 * Categories: zenvora-store
 * Description: Eight-up category cards with the hang-tag corner signature and a "More Categories" tile.
 */
$zv_categories = array(
	array( 'Fashion', '128 Items', 'fashion-clothing' ),
	array( 'Electronics', '96 Items', 'electronics' ),
	array( 'Home & Living', '85 Items', 'home-living' ),
	array( 'Beauty', '72 Items', 'beauty-health' ),
	array( 'Shoes', '64 Items', 'shoes-bags' ),
	array( 'Bags', '48 Items', 'shoes-bags' ),
	array( 'Watches', '36 Items', 'jewelry-watches' ),
);
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">

	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontSize":"0.6875rem"}},"textColor":"accent"} -->
			<p class="has-accent-color has-text-color">Browse</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2} -->
			<h2>Shop by Category</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"textTransform":"uppercase","fontWeight":"600","letterSpacing":"0.03em"}},"textColor":"accent-dark"} -->
		<p class="has-accent-dark-color has-text-color has-small-font-size"><a href="<?php echo zenvora_get_shop_link(); ?>">All Categories →</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"zv-cat-cards-grid","style":{"spacing":{"margin":{"top":"2rem"}}},"layout":{"type":"grid","columnCount":4}} -->
	<div class="wp-block-group zv-cat-cards-grid" style="margin-top:2rem">
		<?php foreach ( $zv_categories as $zv_cat ) : ?>
		<!-- wp:group {"className":"zv-tag-corner","backgroundColor":"surface","style":{"border":{"width":"1px","color":"var:preset|color|border"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group zv-tag-corner has-surface-background-color has-background">
			<!-- wp:image {"sizeSlug":"medium","style":{"aspectRatio":"1"}} -->
			<figure class="wp-block-image size-medium"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder-category.jpg' ) ); ?>" alt="<?php echo esc_attr( $zv_cat[0] ); ?>"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1rem","right":"1rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p><a href="<?php echo zenvora_get_product_cat_link( $zv_cat[2] ); ?>"><?php echo esc_html( $zv_cat[0] ); ?></a></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"x-small","textColor":"muted","fontFamily":"mono"} -->
				<p class="has-muted-color has-text-color has-x-small-font-size has-mono-font-family"><?php echo esc_html( $zv_cat[1] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<?php endforeach; ?>

		<!-- wp:group {"style":{"border":{"width":"1px","style":"dashed","color":"var:preset|color|accent"}},"backgroundColor":"accent-soft","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-accent-soft-background-color has-background">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"accent-dark"} -->
			<p class="has-text-align-center has-accent-dark-color has-text-color"><a href="<?php echo zenvora_get_shop_link(); ?>">More Categories →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
