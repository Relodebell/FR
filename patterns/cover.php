<?php
/**
 * Title: Cover
 * Slug: bibimbap/cover
 * Categories: featured
 * Keywords: Specials
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bibimbap-cover.png","dimRatio":0,"minHeight":545,"minHeightUnit":"px","align":"wide"} -->
<div class="wp-block-cover alignwide" style="min-height:545px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/bibimbap-cover.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%","style":{"spacing":{"padding":{"top":"4.5rem","right":"2.2rem","left":"2.2rem","bottom":"4.5rem"}}},"backgroundColor":"background"} -->
<div class="wp-block-column is-vertically-aligned-center has-background-background-color has-background" style="padding-top:4.5rem;padding-right:2.2rem;padding-bottom:4.5rem;padding-left:2.2rem;flex-basis:70%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"secondary"} -->
<h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color" style="font-style:normal;font-weight:300"><?php echo esc_html__( 'Specials', 'bibimbap' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
