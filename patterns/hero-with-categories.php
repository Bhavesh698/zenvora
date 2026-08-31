<?php
/**
 * Title: Hero With Category Sidebar
 * Slug: zenvora/hero-with-categories
 * Categories: zenvora-store
 * Description: Desktop shop-by-category panel beside a large promotional hero banner.
 */
$zv_sidebar_categories = array(
	array( 'Fashion & Clothing', 'fashion-clothing' ),
	array( 'Electronics', 'electronics' ),
	array( 'Home & Living', 'home-living' ),
	array( 'Beauty & Health', 'beauty-health' ),
	array( 'Sports & Outdoors', 'sports-outdoors' ),
	array( 'Shoes & Bags', 'shoes-bags' ),
	array( 'Jewelry & Watches', 'jewelry-watches' ),
	array( 'Toys & Kids', 'toys-kids' ),
	array( 'Books & Stationery', 'books-stationery' ),
	array( 'Automotive', 'automotive' ),
);
?>
<!-- wp:group {"align":"wide","className":"zv-hero-grid","style":{"spacing":{"padding":{"top":"2.25rem"}}},"layout":{"type":"grid","columnCount":2}} -->
<div class="wp-block-group alignwide zv-hero-grid" style="grid-template-columns:270px 1fr;padding-top:2.25rem">

	<!-- wp:group {"className":"zv-cat-panel","backgroundColor":"surface","layout":{"type":"constrained"}} -->
	<div class="wp-block-group zv-cat-panel has-surface-background-color has-background">
		<!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.25rem"}},"border":{"bottom":{"width":"1px","color":"var:preset|color|border"}}}} -->
		<h3 class="has-medium-font-size" style="padding-top:1rem;padding-bottom:1rem;padding-left:1.25rem">Shop by Category</h3>
		<!-- /wp:heading -->

		<!-- wp:list {"className":"wp-block-list"} -->
		<ul>
			<?php foreach ( $zv_sidebar_categories as $zv_side_cat ) : ?>
			<li><a href="<?php echo zenvora_get_product_cat_link( $zv_side_cat[1] ); ?>"><?php echo esc_html( $zv_side_cat[0] ); ?></a></li>
			<?php endforeach; ?>
		</ul>
		<!-- /wp:list -->

		<!-- wp:buttons {"style":{"border":{"top":{"width":"1px","color":"var:preset|color|border"}}}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"width":100,"className":"is-style-fill","style":{"border":{"radius":"0px"}}} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100">
				<a class="wp-block-button__link wp-element-button" href="<?php echo zenvora_get_shop_link(); ?>">View All Categories</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:cover {"useFeaturedImage":false,"dimRatio":0,"minHeight":420,"customOverlayColor":"#EFE7DA","className":"zv-hero","style":{"border":{"radius":"3px"}}} -->
	<div class="wp-block-cover zv-hero" style="min-height:420px">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#EFE7DA"></span>
		<div class="wp-block-cover__inner-container">

			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.08em","fontSize":"0.6875rem"}},"backgroundColor":"contrast","textColor":"surface"} -->
			<p class="has-surface-color has-contrast-background-color has-text-color has-background" style="padding:6px 14px;border-radius:20px;display:inline-block">✦ New Season Arrivals</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"fontSize":"huge"} -->
			<h1 class="has-huge-font-size">Everything you need, <em>beautifully</em> designed.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"contrast-soft","fontSize":"large"} -->
			<p class="has-contrast-soft-color has-text-color has-large-font-size">A powerful multipurpose WooCommerce theme built for modern online stores — from fashion to furniture.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"border":{"radius":"2px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo zenvora_get_shop_link(); ?>">Shop Now</a></div>
				<!-- /wp:button -->
<<<<<<< HEAD
				<!-- wp:button {"className":"is-style-outline","textColor":"contrast","style":{"border":{"radius":"2px","color":"var(--wp--preset--color--contrast)","width":"1.5px"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-contrast-color has-text-color wp-element-button" style="border-color:var(--wp--preset--color--contrast);border-width:1.5px" href="<?php echo esc_url( home_url( '/collections/' ) ); ?>">Explore Collection</a></div>
=======
				<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"2px"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/collections/' ) ); ?>">Explore Collection</a></div>
>>>>>>> ed789dd14846b832afdaa45d3bd2ae266b4646ff
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
<<<<<<< HEAD
				<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-soft"} -->
				<p class="has-contrast-soft-color has-text-color has-small-font-size">Free Shipping</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-soft"} -->
				<p class="has-contrast-soft-color has-text-color has-small-font-size">Secure Payment</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-soft"} -->
				<p class="has-contrast-soft-color has-text-color has-small-font-size">30 Days Returns</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-soft"} -->
				<p class="has-contrast-soft-color has-text-color has-small-font-size">24/7 Support</p>
=======
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">Free Shipping</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">Secure Payment</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">30 Days Returns</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size">24/7 Support</p>
>>>>>>> ed789dd14846b832afdaa45d3bd2ae266b4646ff
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
	</div>
	<!-- /wp:cover -->

</div>
<!-- /wp:group -->
