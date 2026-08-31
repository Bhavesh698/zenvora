=== Zenvora ===

A premium, industry-neutral WooCommerce block theme for modern online stores —
fashion, electronics, home & living, beauty, sports, and more. Built entirely
with native Gutenberg blocks, block patterns and template parts. No page
builder required.

== What's included ==

templates/
  index.html            Fallback / blog listing
  front-page.html        Homepage — assembles the store patterns below
  page.html               Standard page
  page-full-width.html   Full-width page (no side padding)
  single.html             Blog post
  archive.html            Blog / category archive
  404.html                 Not-found page
  single-product.html    WooCommerce single product page
  archive-product.html  WooCommerce shop page (filters + product grid)

parts/
  header.html  Announcement bar, main header (logo, search, account/cart), primary nav
  footer.html  Newsletter band + full footer + payment icons

patterns/ (auto-registered by WordPress from this folder — no setup needed)
  hero-with-categories.php    Shop-by-category sidebar + hero banner
  quick-links.php             Trending / New / Best Sellers / Top Rated / Sale / Featured chips
  category-grid.php           8-up featured category cards with the hang-tag corner signature
  popular-products-tabs.php New Arrivals / Best Sellers / Top Rated / On Sale tabs, backed by
                              live WooCommerce Product Collection queries
  promo-banners.php           Three-banner promotional layout
  brand-strip.php             "Trusted by 1,000+ brands" wordmark strip
  why-choose.php               Free Shipping / Easy Returns / Secure Payment / 24/7 Support

assets/
  css/custom.css    Structural & behavioural CSS that theme.json can't express
                     (announcement bar, product-card badges & hover image swap,
                     the hang-tag corner signature, tabs, responsive grid overrides)
  css/editor.css    Loads the same rules + fonts inside the block editor
  js/theme.js       Tiny vanilla-JS tab switcher for the Popular Products pattern
  images/           Warm neutral placeholder JPGs for categories/products —
                     replace with real photography before going live

theme.json  Design tokens: color palette, type scale (Fraunces / Inter / IBM
            Plex Mono), spacing scale, layout widths, block-level defaults

== Design system ==

Palette:  Porcelain #FAF8F4 · Surface #FFFFFF · Ink #1E1B18 · Ink Soft #4A453F
          Muted #8C8578 · Border #E8E2D7 · Bronze (accent) #A5672F
          Bronze Dark #7A4B1F · Bronze Soft #F2E4D2 · Sale #AC4436 · New #3E5C74

Type:     Fraunces (display headlines, used sparingly and in italic for
          accents) · Inter (UI/body) · IBM Plex Mono (prices, SKUs, counts)

Signature: a hang-tag "corner clip" on category cards (.zv-tag-corner) — a
           nod to a physical price tag that ties the card system back to
           retail without being a decorative gimmick.

== Before you activate ==

1. This theme is built around WooCommerce. Install and activate WooCommerce
   first, then run through the WooCommerce setup wizard.
2. Replace the JPGs in assets/images/ with real category/product photography.
3. For a ThemeForest submission, self-host Fraunces, Inter and IBM Plex Mono
   under assets/fonts/ and switch the @font-face rule in functions.php /
   editor.css instead of calling Google Fonts at runtime.
4. Menus: assign a "Primary" menu (used by the primary nav) and a small
   "Utility" menu (announcement bar) via Appearance → Editor → Navigation,
   or the Site Editor will show WordPress's default placeholder menu.
5. WooCommerce block names (product-collection, product-filter, etc.) are
   current as of WooCommerce 8.6+. If you're on an older version, open each
   WooCommerce block in the Site Editor once after activating — the editor
   will offer to update deprecated block markup automatically.
6. Taxonomy pages (product categories/tags) fall back to
   templates/archive-product.html. Duplicate it as taxonomy-product_cat.html
   in the Site Editor if you want a distinct category-page layout.

== Not yet included (flagged, not hidden) ==

- Cart & Checkout are standard WooCommerce block pages, not FSE templates —
  build them once in Pages → Cart / Checkout using the WooCommerce Cart and
  Checkout blocks, styled automatically by this theme's tokens.
- My Account page uses WooCommerce's own account shortcode/block layout.
- Real screenshot.png here is a schematic placeholder generated for this
  package — swap in an actual rendered screenshot before listing on
  ThemeForest (their guidelines require a real browser capture).

== License ==

GPL v2 or later, in keeping with the WordPress themes directory requirements.
