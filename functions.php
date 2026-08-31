<?php
/**
 * Zenvora functions and definitions.
 *
 * @package Zenvora
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme setup.
 */
function zenvora_setup() {
	// Block-theme / editor support.
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	add_editor_style( 'assets/css/editor.css' );

	// WooCommerce support.
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	// Declare block template folders (default for block themes, kept explicit).
	add_theme_support( 'block-templates' );
	add_theme_support( 'block-template-parts' );
}
add_action( 'after_setup_theme', 'zenvora_setup' );

/**
 * Bail with an admin notice if WooCommerce is not active — this theme is built around it.
 */
function zenvora_woocommerce_missing_notice() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		echo '<div class="notice notice-warning"><p>' .
			esc_html__( 'Zenvora is designed for WooCommerce. Please install and activate the WooCommerce plugin to unlock the shop, product and cart templates.', 'zenvora' ) .
			'</p></div>';
	}
}
add_action( 'admin_notices', 'zenvora_woocommerce_missing_notice' );

/**
 * Enqueue front-end fonts and theme stylesheet.
 *
 * Note: for production/ThemeForest distribution, self-host Fraunces, Inter and
 * IBM Plex Mono under assets/fonts/ and switch this to a local @font-face
 * (see theme.json "fontFamilies") instead of calling Google Fonts at runtime.
 */
function zenvora_enqueue_assets() {
	wp_enqueue_style(
		'zenvora-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,500&family=Inter:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'zenvora-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'zenvora-custom',
		get_theme_file_uri( 'assets/css/custom.css' ),
		array( 'zenvora-fonts' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'zenvora-theme',
		get_theme_file_uri( 'assets/js/theme.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'zenvora_enqueue_assets' );

/**
 * Register block pattern categories used by this theme.
 */
function zenvora_pattern_categories() {
	register_block_pattern_category(
		'zenvora-store',
		array( 'label' => __( 'Zenvora — Store Sections', 'zenvora' ) )
	);
}
add_action( 'init', 'zenvora_pattern_categories' );

/**
 * Register custom named font sizes / spacing steps that are hard to express
 * declaratively for older WP versions. Safe no-op on newer core versions
 * where theme.json already covers this.
 */
function zenvora_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zenvora_content_width', 700 );
}
add_action( 'after_setup_theme', 'zenvora_content_width' );

/**
 * Widen the default WooCommerce archive product grid to match the theme's
 * 4-column desktop rhythm instead of the WooCommerce default of 3.
 */
function zenvora_woocommerce_loop_columns() {
	return 4;
}
add_filter( 'loop_shop_columns', 'zenvora_woocommerce_loop_columns' );

/**
 * Remove default WooCommerce styling in favor of this theme's block-based markup.
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Resolve a product category link from its slug — dynamically, so it always
 * matches whatever permalink base is actually configured (including a
 * subdirectory install, or a custom "Product category base" under
 * WooCommerce → Settings → Products → Permalinks).
 *
 * If the category doesn't exist yet (e.g. previewing this pattern on a
 * fresh WooCommerce install before categories are created), this falls
 * back to building the URL from the site's real configured category base
 * instead of a hardcoded guess — so it's still correct, just not yet a
 * real link.
 *
 * @param string $slug Product category slug, e.g. 'fashion-clothing'.
 * @return string Escaped, absolute URL.
 */
function zenvora_get_product_cat_link( $slug ) {
	$term = get_term_by( 'slug', $slug, 'product_cat' );

	if ( $term && ! is_wp_error( $term ) ) {
		$link = get_term_link( $term );
		if ( ! is_wp_error( $link ) ) {
			return esc_url( $link );
		}
	}

	$base = 'product-category';
	if ( function_exists( 'wc_get_permalink_structure' ) ) {
		$structure = wc_get_permalink_structure();
		if ( ! empty( $structure['category_rewrite_slug'] ) ) {
			$base = $structure['category_rewrite_slug'];
		}
	}

	return esc_url( home_url( '/' . trailingslashit( $base ) . $slug . '/' ) );
}

/**
 * Resolve the shop page link dynamically — respects whatever page has
 * actually been assigned as the WooCommerce shop page, including a
 * subdirectory install, rather than assuming /shop/ at the site root.
 *
 * @param string $query_args Optional raw query string to append, e.g. 'on_sale=1'.
 * @return string Escaped, absolute URL.
 */
function zenvora_get_shop_link( $query_args = '' ) {
	$shop_url = function_exists( 'wc_get_page_permalink' )
		? wc_get_page_permalink( 'shop' )
		: home_url( '/shop/' );

	if ( $query_args ) {
		$shop_url = trailingslashit( $shop_url ) . '?' . $query_args;
	}

	return esc_url( $shop_url );
}
