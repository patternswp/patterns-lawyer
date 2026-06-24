<?php
/**
 * Title: Card 1
 * Slug: patterns-lawyer/card-1
 * Categories: featured
 * Description: A layout featuring an icon, title, and content, commonly used in repeated columns or as a standalone section.
 *
 * @package    Patterns_Lawyer
 * @subpackage Patterns_Lawyer/patterns
 * @since      1.0.0
 */

?>

<!-- wp:group {"style":{"border":{"color":"#ffffff40","style":"solid","width":"1px"},"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-border-color" style="border-color:#ffffff40;border-style:solid;border-width:1px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"layout":{"selfStretch":"fixed","flexSize":""}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group">
    <!-- wp:image {"width":"80px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|white"}}} -->
    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-2.png" style="object-fit:contain;width:80px;"/></figure>
    <!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"left":{"color":"#ffffff40","style":"solid","width":"1px"}},"dimensions":{"minHeight":""},"spacing":{"padding":{"left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-left-color:#ffffff40;border-left-style:solid;border-left-width:1px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"dimensions":{"minHeight":""},"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"left"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p><?php esc_html_e( 'Book Your', 'patterns-lawyer' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4,"className":"pwp-txt-dec-non"} -->
<h4 class="wp-block-heading pwp-txt-dec-non"><a href="#"><?php esc_html_e( 'Appointment', 'patterns-lawyer' ); ?></a></h4>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
