<?php
/**
 * Plugin Name: URC After Post
 * Description: Ads more details after each post entry
 * Version: 1.0
 * Author: Mark Corpuz
 * Author URI: http://smarterwebpackages.com/
 * Network: true
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


add_action( 'genesis_after_loop', 'urc_after_post_function' );
function urc_after_post_function() {

	// show only if singular or archive pages
	if( is_singular('post') ) {

		?>
		<div class="adsense-matchedcontent">
		<h4 class="item-widgettitle space-bottom space-top-double clearfix">SUGGESTED ARTICLES</h4>
		<div class="space-bottom clearfix"></div>
		<?php echo do_shortcode( '[spk_google_suggested_articles_js][/spk_google_suggested_articles_js]' ); ?>
		</div>

		<h4 class="item-widgettitle"><a href="http://www.understandingrelationships.com/category/essential-fundamentals">ESSENTIAL FUNDAMENTALS</a></h4>
		<div class="space-bottom clearfix"></div>
		<?php echo do_shortcode( '[soliloquy id="23020"]' ); ?>

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

}