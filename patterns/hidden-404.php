<?php
/**
 * Title: 404
 * Slug: patterns-lawyer/hidden-404
 * Inserter: no
 *
 * @package    Patterns_Lawyer
 * @subpackage Patterns_Lawyer/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-12.jpg","hasParallax":true,"dimRatio":80,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":50,"minHeightUnit":"vh","align":"full","style":{"color":{"duotone":"unset"},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-12.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"textAlign":"center","level":1,"textColor":"default"} -->
<h1 class="wp-block-heading has-text-align-center has-default-color has-text-color"><?php esc_html_e( '404', 'patterns-lawyer' ); ?></h1>
<!-- /wp:heading -->
</div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group">

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"quinary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-quinary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-center"><?php esc_html_e( 'Oops!', 'patterns-lawyer' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php esc_html_e( 'This page could not be found.', 'patterns-lawyer' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><?php esc_html_e( 'We can\'t find the page you\'re looking for. Check out our Help Center or head back to home', 'patterns-lawyer' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Type Keyword .........","width":75,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","fontSize":"small","fontFamily":"dm-sans"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|10"} -->
<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-link-color has-x-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><a href="<?php echo esc_url( home_url() ); ?>" data-type="page" data-id="263"><?php esc_html_e( 'Or Back To HomePage', 'patterns-lawyer' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</main>
<!-- /wp:group -->
