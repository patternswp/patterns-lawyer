<?php
/**
 * Title: Primary Sidebar
 * Slug: patterns-lawyer/primary-sidebar
 * Categories: posts
 * Block Types: core/template-part/primary-sidebar
 * Description: Display a collection of blocks for primary sidebar template part.
 *
 * @package    Patterns_Lawyer
 * @subpackage Patterns_Lawyer/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:pattern {"slug":"patterns-lawyer/search-form"} /-->
    <!-- wp:pattern {"slug":"patterns-lawyer/latest-posts"} /-->
    <!-- wp:pattern {"slug":"patterns-lawyer/latest-comments"} /-->
</div>
<!-- /wp:group -->
