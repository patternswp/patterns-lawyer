<?php
/**
 * Title: Copyright
 * Slug: patterns-lawyer/copyright
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Dynamic copyright text
 *
 * @package    Patterns_Lawyer
 * @subpackage Patterns_Lawyer/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"tertiary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-tertiary-color has-text-color has-link-color">
 <!-- wp:paragraph {"placeholder":"<?php esc_attr_e( 'Dynamic copyright text', 'patterns-lawyer' ); ?>","metadata":{"bindings":{"content":{"source":"patterns-lawyer/copyright","args":{"key":"copyright"}}}},"textColor":"tertiary","fontSize":"x-small"} -->
    <p class="has-tertiary-color has-text-color has-x-small-font-size"></p>
    <!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php esc_html_e( '. All Rights Reserved', 'patterns-lawyer' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
