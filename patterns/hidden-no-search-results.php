<?php
/**
 * Title: No Search Result
 * Slug: patterns-lawyer/hidden-no-search-results
 * Inserter: no
 *
 * @package    Patterns_Lawyer
 * @subpackage Patterns_Lawyer/patterns
 * @since      1.0.0
 */

?>
<!-- wp:paragraph -->
<p>
<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'patterns-lawyer' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'patterns-lawyer' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'patterns-lawyer' ); ?>","showLabel":false,"buttonText":"<?php esc_html_e( 'Search', 'patterns-lawyer' ); ?>","buttonUseIcon":true} /-->
