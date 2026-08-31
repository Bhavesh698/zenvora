<?php
/**
 * Title: Trusted Brands Strip
 * Slug: zenvora/brand-strip
 * Categories: zenvora-store
 * Description: A quiet horizontal strip of wordmark placeholders — swap for real logos with an Image block.
 */
$zv_brands = array( 'Marchel', 'Northline', 'Verona', 'Kaira Co.', 'Studio Halden', 'Ostra' );
?>
<!-- wp:group {"align":"wide","className":"zv-brand-strip","style":{"spacing":{"padding":{"top":"2.25rem","bottom":"2.25rem"}},"border":{"top":{"width":"1px","color":"var:preset|color|border"},"bottom":{"width":"1px","color":"var:preset|color|border"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide zv-brand-strip">

	<!-- wp:paragraph {"fontSize":"x-small","textColor":"muted","fontFamily":"mono","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.06em"}}} -->
	<p class="has-muted-color has-text-color has-x-small-font-size has-mono-font-family">Trusted by 1,000+ Brands Worldwide</p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<?php foreach ( $zv_brands as $zv_brand ) : ?>
		<!-- wp:paragraph {"fontFamily":"display","className":"zv-brand-mark","fontSize":"large"} -->
		<p class="has-large-font-size zv-brand-mark has-display-font-family"><?php echo esc_html( $zv_brand ); ?></p>
		<!-- /wp:paragraph -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
