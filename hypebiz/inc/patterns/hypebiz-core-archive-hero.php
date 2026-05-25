<?php
/**
 * Pattern content.
 */
return array(
	'title'      => __( 'Core Archive Hero', 'hypebiz' ),
	'categories' => array( 'hypebiz-core' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"wideSize":"","contentSize":""}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:cover {"url":"' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/StockSnap_RRJH1KMRMW.webp","id":266,"dimRatio":70,"overlayColor":"gv-color-dark-background-secondary","isUserOverlayColor":true,"focalPoint":{"x":"0.48","y":"0.34"},"contentPosition":"center center"} -->
<div class="wp-block-cover"><img class="wp-block-cover__image-background wp-image-266" alt="" src="' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/StockSnap_RRJH1KMRMW.webp" style="object-position:48% 34%" data-object-fit="cover" data-object-position="48% 34%"/><span aria-hidden="true" class="wp-block-cover__background has-gv-color-dark-background-secondary-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"wideSize":"1140px"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontSize":"60px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"cormorant-garamond"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
	'is_sync' => false,
);
