<?php
/**
 * Title: Header
 * Slug: zino/header
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"className":"home-banner","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
<div class="wp-block-group home-banner has-secondary-color has-text-color has-link-color"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/main-banner.jpg","alt":"main-banner","dimRatio":50,"overlayColor":"black","isUserOverlayColor":true,"minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr_e( 'main-banner', 'zino' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/main-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:site-logo {"width":150,"shouldSyncIcon":true,"align":"center","className":"is-style-rounded"} /-->

<!-- wp:site-title {"textAlign":"center","textColor":"white"} /-->

<!-- wp:navigation {"textColor":"white","icon":"menu","overlayBackgroundColor":"black","overlayTextColor":"white","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Resources","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Portfolio","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
