<?php
/**
 * Title: Footer
 * Slug: patterns-lawyer/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Patterns_Lawyer
 * @subpackage Patterns_Lawyer/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background">
    <!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|80"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-top"
        style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%">
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">

<!-- wp:site-logo {"width":40} /-->

 <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"layout":{"selfStretch":"fixed","flexSize":"100px"}},"textColor":"default"} /-->

</div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"tertiary"} -->
<p class="has-tertiary-color has-text-color"><?php esc_html_e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita repudiandae neque illum aspernatur fugiat', 'patterns-lawyer' ); ?> </p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"25px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:25px">
    <!-- wp:social-links {"iconColor":"default","iconColorValue":"#ffffff","size":"has-normal-icon-size","align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
        <ul
            class="wp-block-social-links aligncenter has-normal-icon-size has-icon-color is-style-logos-only">
            <!-- wp:social-link {"url":"#","service":"twitter"} /-->

            <!-- wp:social-link {"url":"#","service":"instagram"} /-->

            <!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
        </ul>
    <!-- /wp:social-links -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%">
    <!-- wp:heading {"level":5,"textColor":"default"} -->
    <h5 class="wp-block-heading has-default-color has-text-color"><?php esc_html_e( 'Contact Info', 'patterns-lawyer' ); ?></h5>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"textColor":"tertiary","fontSize":"small"} -->
    <p class="has-tertiary-color has-text-color has-small-font-size"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'patterns-lawyer' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} -->
        <p class="pwp-txt-dec-non has-medium-font-size" style="font-style:normal;font-weight:700"><a href="<?php echo esc_url( 'tel:(629) 555-0129' ); ?>"><?php esc_html_e( '(629) 555-0129', 'patterns-lawyer' ); ?></a></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"className":"pwp-txt-dec-non","fontSize":"small"} -->
        <p class="pwp-txt-dec-non has-small-font-size"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'patterns-lawyer' ); ?></a></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.33%"><!-- wp:heading {"level":5,"textColor":"default"} -->

<h5 class="wp-block-heading has-default-color has-text-color"><?php esc_html_e( 'Practice Areas', 'patterns-lawyer' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group">
    
    <!-- wp:navigation {"textColor":"tertiary","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
    <!-- wp:navigation-link {"label":"Blog","url":"#"} /-->

    <!-- wp:navigation-link {"label":"About","url":"#"} /-->

    <!-- wp:navigation-link {"label":"FAQs","url":"#"} /-->

    <!-- wp:navigation-link {"label":"Authors","url":"#"} /-->
    <!-- /wp:navigation -->

    <!-- wp:navigation {"textColor":"tertiary","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
    <!-- wp:navigation-link {"label":"Blog","url":"#"} /-->

    <!-- wp:navigation-link {"label":"About","url":"#"} /-->

    <!-- wp:navigation-link {"label":"FAQs","url":"#"} /-->

    <!-- wp:navigation-link {"label":"Authors","url":"#"} /-->
    <!-- /wp:navigation -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"full","style":{"color":{"background":"#00000042"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#00000042"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
<!-- wp:pattern {"slug":"patterns-lawyer/copyright"} /-->
<!-- wp:paragraph {"className":"pwp-txt-dec-non","textColor":"tertiary","fontSize":"x-small"} -->
<p class="pwp-txt-dec-non has-tertiary-color has-text-color has-x-small-font-size">
    <?php 
    printf(
        esc_html__('Hire one of our professional legal experts this very day. Emergency Call: %s', 'patterns-lawyer'),
        '<a href="' . esc_url('tel:+000-123-456789') . '">' . esc_html__('+000-123-456789', 'patterns-lawyer') . '</a>'
    ); 
    ?>
</p>
            <!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"patterns-lawyer/scroll-to-top-button"} /-->

</div>
<!-- /wp:group -->
