<?php
/**
 * Title: Section Title 2
 * Slug: patterns-lawyer/section-title-2
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in left alignment, commonly used for section titles in feature areas.
 *
 * @package    Patterns_Lawyer
 * @subpackage Patterns_Lawyer/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"","justifyContent":"center","wideSize":""}} -->
<div class="wp-block-group alignwide">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group">

<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"5rem"}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.2","textTransform":"uppercase","letterSpacing":"1px"}},"fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size" style="letter-spacing:1px;line-height:1.2;text-transform:uppercase"><?php esc_html_e( 'Multidisciplinary Team', 'patterns-lawyer' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"5rem"}},"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-left:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-style:normal;font-weight:500"><?php
printf(
    esc_html__('Your initial consultation with a lawyer is %s', 'patterns-lawyer'),
    '<mark style="background-color:rgba(0, 0, 0, 0);" class="has-inline-color has-primary-color">' . esc_html__('free', 'patterns-lawyer') . '</mark>'
);
?>
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}},"fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size" style="line-height:1.7"><?php esc_html_e( 'Massa eget egestas purus viverra accumsan in nisl nisi scelerisque. Orci nulla pellentesque dignissim enim sit. Facilisis gravida neque ', 'patterns-lawyer' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
