<?php
/**
 * Pattern content.
 */
return array(
	'title'      => __( 'Core Page Hero', 'hypebiz' ),
	'categories' => array( 'hypebiz-core' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0"}}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:cover {"url":"' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/staff-agreement-applicant-associate-boardroom-business-1652041-pxhere.com_.jpg","id":1031,"dimRatio":80,"overlayColor":"gv-color-dark-secondary","isUserOverlayColor":true,"focalPoint":{"x":"0.53","y":"0.44"},"minHeight":430,"minHeightUnit":"px","contentPosition":"center center"} -->
<div class="wp-block-cover" style="min-height:430px"><img class="wp-block-cover__image-background wp-image-1031" alt="" src="' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/staff-agreement-applicant-associate-boardroom-business-1652041-pxhere.com_.jpg" style="object-position:53% 44%" data-object-fit="cover" data-object-position="53% 44%"/><span aria-hidden="true" class="wp-block-cover__background has-gv-color-dark-secondary-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"wideSize":"1140px"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"60px","fontStyle":"normal","fontWeight":"500"}},"textColor":"white","fontFamily":"cormorant-garamond"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
	'is_sync' => false,
);
