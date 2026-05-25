<?php
/**
 * Pattern content.
 */
return array(
	'title'      => __( 'Core Index Section 1', 'hypebiz' ),
	'categories' => array( 'hypebiz-core' ),
	'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"80px","bottom":"100px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"seventh","textColor":"third","layout":{"inherit":true,"type":"constrained","contentSize":"1140px"}} -->
<main class="wp-block-group has-third-color has-seventh-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:80px;padding-bottom:100px"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:query {"queryId":24,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"height":"220px","align":"wide","style":{"spacing":{"margin":{"bottom":"20px","right":"0px"}}}} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|l8Pnr3"}}}},"backgroundColor":"white","textColor":"gv-color-text-secondary"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.4"},"spacing":{"margin":{"right":"0px"}}},"textColor":"gv-color-primary","fontSize":"heading-4","fontFamily":"cormorant-garamond"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":18,"style":{"spacing":{"margin":{"top":"20px","bottom":"20px","right":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|gv-color-accent"},":hover":{"color":{"text":"var:preset|color|gv-color-accent-hover"}}}},"typography":{"fontSize":"14px"}},"textColor":"gv-color-text-secondary"} /-->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"style":{"elements":{"link":{"color":{"text":"var:preset|color|rg0Kv5"}}}},"textColor":"gv-color-text-secondary","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->',
	'is_sync' => false,
);
