<?php
/**
 * Title: Primary Header
 * Slug: patterns-lawyer/hidden-primary-header
 * Inserter: no
 *
 * @package    Patterns_Lawyer
 * @subpackage Patterns_Lawyer/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        
        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"> 
                <!-- wp:pattern {"slug":"patterns-lawyer/site-identity"} /-->

                <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"left":{"color":"#ffffff40","style":"solid","width":"1px"},"top":{},"right":{"color":"#ffffff40","style":"solid","width":"1px"},"bottom":{}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group"
                    style="border-right-color:#ffffff40;border-right-style:solid;border-right-width:1px;border-left-color:#ffffff40;border-left-style:solid;border-left-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
                <!-- wp:pattern {"slug":"patterns-lawyer/navigation-menu"} /-->
                </div>
                <!-- /wp:group -->

               
            </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"at-d-non at-lg-inl-flx","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group at-d-non at-lg-inl-flx">

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"textColor":"default","layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group has-default-color has-text-color has-link-color">

            <!-- wp:image {"width":"24px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icon-1.png" style="object-fit:contain;width:24px;"/></figure>
            <!-- /wp:image -->

            <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
            <p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Call : +00-123-456789', 'patterns-lawyer' ); ?></p>
            <!-- /wp:paragraph -->
            
        </div>
            <!-- /wp:group -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
            <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Get Quote', 'patterns-lawyer' ); ?></a></div>
            <!-- /wp:button --></div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
         
    

    </div>
    <!-- /wp:group -->