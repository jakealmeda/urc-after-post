<?php
/**
 * Plugin Name: URC After Post
 * Description: Ads more details after each post entry which includes the Suggested Articles.
 * Version: 1.0.1
 * Author: Mark Corpuz
 * Author URI: http://smarterwebpackages.com/
 * Network: true
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


/*add_action( 'genesis_after_loop', 'urc_after_post_function' );
function urc_after_post_function() {

	// show only if singular or arcahive pages
	if( is_singular('post') ) {

		?>
		<div class="adsense-matchedcontent">
		<h4 class="item-widgettitle space-bottom space-top-double clearfix">SUGGESTED ARTICLES</h4>
		<div class="space-bottom clearfix"></div>
		<?php echo do_shortcode( '[spk_google_suggested_articles_js][/spk_google_suggested_articles_js]' ); ?>
		</div>

		<div class="clearfix space-vertical"></div>
		<div class="panel panel-ctacontent">
		<div class="top">
		<h4 class="titlebar">PHONE COACHING, EMAIL COACHING &amp; PRODUCTS</h4>
		</div>
		<div class="main">
		<div class="item-ctacontent">
			<?php echo do_shortcode( '[su_post field="post_content" post_id="22710"]' ); ?>
		</div>
		<div class="item-ctacontent last">
			<?php echo do_shortcode( '[su_post field="post_content" post_id="22704"]' ); ?>
		</div>
		<div class="clearfix space-bottom-double hide-meddown"></div>
		<div class="item-ctacontent hide-medaboveup last">
			<?php echo do_shortcode( '[su_post field="post_content" post_id="22698"]' ); ?>
		</div>
		<div class="item-ctacontent hide-meddown wide">
			<?php echo do_shortcode( '[su_post field="post_content" post_id="26405"]' ); ?>
		</div>
		<div class="clearfix"></div>
		</div>
		</div>
		<?php

	}

}*/


add_action( 'genesis_entry_footer', 'urc_suggested_articles_fn' );
function urc_suggested_articles_fn() {

	if( is_singular('post') ) {
		?>
		<h4 class="item-widgettitle space-bottom space-top-double clearfix">SUGGESTED ARTICLES</h4>
		<div class="space-bottom clearfix"></div>
		<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle" style="display: block;" data-ad-format="autorelaxed" data-ad-client="ca-pub-0947746501358966" data-ad-slot="2135583692"></ins>
		<script><br />
		     (adsbygoogle = window.adsbygoogle || []).push({});<br />
		</script>
		<?php
	}
	
}

