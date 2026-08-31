<?php
/**
 * Title: Why Choose Zenvora
 * Slug: zenvora/why-choose
 * Categories: zenvora-store
 * Description: Four-up service/benefit icons — Free Shipping, Easy Returns, Secure Payment, 24/7 Support.
 */
$zv_benefits = array(
	array( 'Free Shipping', "Complimentary delivery on every order over \$75, no code needed." ),
	array( 'Easy Returns', 'Change your mind within 30 days for a full, hassle-free refund.' ),
	array( 'Secure Payment', 'Every transaction is encrypted end-to-end for total peace of mind.' ),
	array( '24/7 Support', "Our team is on hand around the clock, wherever you're shopping from." ),
);
?>
<!-- wp:group {"align":"wide","className":"zv-why-grid","backgroundColor":"surface","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}},"border":{"top":{"width":"1px","color":"var:preset|color|border"},"bottom":{"width":"1px","color":"var:preset|color|border"}}},"layout":{"type":"grid","columnCount":4}} -->
<div class="wp-block-group alignwide zv-why-grid has-surface-background-color has-background">
	<?php foreach ( $zv_benefits as $zv_benefit ) : ?>
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"className":"zv-why-icon","backgroundColor":"accent-soft","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1rem","right":"1rem"}},"border":{"radius":"50%"}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-group zv-why-icon has-accent-soft-background-color has-background" style="border-radius:50%">
			<!-- wp:paragraph {"textColor":"accent-dark"} -->
			<p class="has-accent-dark-color has-text-color">✦</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
		<!-- wp:heading {"level":4,"fontFamily":"body","fontSize":"medium"} -->
		<h4 class="has-medium-font-size has-body-font-family"><?php echo esc_html( $zv_benefit[0] ); ?></h4>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"fontSize":"small","textColor":"muted"} -->
		<p class="has-muted-color has-text-color has-small-font-size"><?php echo esc_html( $zv_benefit[1] ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<?php endforeach; ?>
</div>
<!-- /wp:group -->
