<?php
/**
 * Title: Hero Banner
 * Slug: patterns-lawyer/hero-banner
 * Categories: banner
 * Description: A layout for displaying hero banner content with a background and SVGs.
 *
 * @package    Patterns_Lawyer
 * @subpackage Patterns_Lawyer/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg","hasParallax":true,"dimRatio":80,"overlayColor":"secondary","isUserOverlayColor":true,"minHeight":90,"minHeightUnit":"vh","contentPosition":"center center","metadata":{"name":"Hero Banner"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-parallax" style="min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-1.jpg)"></div><div class="wp-block-cover__inner-container">

<!-- wp:pattern {"slug":"patterns-lawyer/hero-banner-content"} /-->

</div></div>
<!-- /wp:cover -->
