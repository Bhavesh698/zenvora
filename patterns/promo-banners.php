<?php
/**
 * Title: Promotional Banners
 * Slug: zenvora/promo-banners
 * Categories: zenvora-store
 * Description: One tall dark banner beside two stacked lighter banners, three distinct treatments in one coherent system.
 */
?>
<!-- wp:group {"align":"wide","className":"zv-promo-grid","style":{"spacing":{"padding":{"top":"4rem"}}},"layout":{"type":"grid","columnCount":2}} -->
<div class="wp-block-group alignwide zv-promo-grid" style="grid-template-columns:1.4fr 1fr;padding-top:4rem">

	<!-- wp:group {"className":"zv-promo is-dark","style":{"spacing":{"padding":{"top":"2.25rem","bottom":"2.25rem","left":"2.25rem","right":"2.25rem"},"minHeight":"400px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group zv-promo is-dark" style="padding:2.25rem;min-height:400px">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontSize":"0.6875rem"}},"textColor":"accent"} -->
		<p class="has-accent-color has-text-color">Limited time</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":3,"style":{"color":{"text":"#ffffff"}}} -->
		<h3 style="color:#ffffff">Mega Sale — Up to 40% Off</h3>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"color":{"text":"#D8D2C6"}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="color:#D8D2C6">Storewide savings across fashion, electronics and home essentials.</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase"}},"textColor":"accent"} -->
		<p class="has-accent-color has-text-color has-small-font-size"><a href="<?php echo zenvora_get_shop_link( 'on_sale=1' ); ?>">Shop the Sale →</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">

		<!-- wp:group {"className":"zv-promo","backgroundColor":"accent-soft","style":{"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.75rem","right":"1.75rem"},"margin":{"bottom":"1.25rem"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group zv-promo has-accent-soft-background-color has-background" style="padding:1.75rem;margin-bottom:1.25rem">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontSize":"0.6875rem"}},"textColor":"accent-dark"} -->
			<p class="has-accent-dark-color has-text-color">Just landed</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3>Summer Collection</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Fresh arrivals across every category, made for the season ahead.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase"}},"textColor":"accent-dark"} -->
			<p class="has-accent-dark-color has-text-color has-small-font-size"><a href="<?php echo zenvora_get_shop_link( 'orderby=date' ); ?>">New Arrivals →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"zv-promo","backgroundColor":"base","style":{"spacing":{"padding":{"top":"1.75rem","bottom":"1.75rem","left":"1.75rem","right":"1.75rem"}},"border":{"width":"1px","color":"var:preset|color|border"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group zv-promo has-base-background-color has-background" style="padding:1.75rem">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontSize":"0.6875rem"}},"textColor":"accent-dark"} -->
			<p class="has-accent-dark-color has-text-color">Craftsmanship</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3} -->
			<h3>Premium Quality</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">Sourced from trusted makers using the best available materials.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase"}},"textColor":"accent-dark"} -->
			<p class="has-accent-dark-color has-text-color has-small-font-size"><a href="/about-us/">Learn More →</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
