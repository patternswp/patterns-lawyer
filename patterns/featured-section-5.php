<?php
/**
 * Title: Featured Section 5
 * Slug: patterns-lawyer/featured-section-5
 * Categories: featured, testimonials
 * Description: A collection of various WordPress inbuilt blocks, such as headings, paragraphs, image, groups, and buttons, arranged in different positions to form a complete page layout.
 *
 * @package    Patterns_Lawyer
 * @subpackage Patterns_Lawyer/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg","hasParallax":true,"dimRatio":50,"overlayColor":"base","minHeight":70,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|60"}}} -->
<div class="wp-block-cover alignfull has-parallax" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30);min-height:70vh">
<span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim"></span>
<div class="wp-block-cover__image-background has-parallax"
style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-4.jpg)">
</div>
<div class="wp-block-cover__inner-container">

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"center","wideSize":""}} -->
<div class="wp-block-group alignwide">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"5rem"}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"1px"}},"fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size" style="letter-spacing:1px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Testimonials', 'patterns-lawyer' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|80"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:500"><?php esc_html_e( 'What People Say', 'patterns-lawyer' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"80px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|primary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-5.png" style="object-fit:contain;width:80px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"20px"}}} -->
<p class="has-text-align-left" style="font-size:20px"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas voluptatem maiores eaque similique non ', 'patterns-lawyer' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/img-9.jpg" style="aspect-ratio:1;object-fit:cover;width:auto;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"textColor":"default"} -->
<h5 class="wp-block-heading has-text-align-left has-default-color has-text-color"><?php esc_html_e( 'John doe', 'patterns-lawyer' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","textColor":"default"} -->
<p class="has-text-align-left has-default-color has-text-color"><?php esc_html_e( 'Company CEO', 'patterns-lawyer' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->




</div></div>
<!-- /wp:cover -->
