<?php 
/**
 * @Packge     : safariotravel
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

// Post Item Start
?>


<div id="<?php the_ID(); ?>" <?php post_class( esc_attr( 'single-blog-post row' ) ); ?>>

	<div class="col-lg-3  col-md-3 meta-details">
		<?php 

		/**
		 * Blog Post Meta
		 * @Hook  safariotravel_blog_posts_meta
		 *
		 * @Hooked safariotravel_blog_posts_meta_cb
		 * 
		 *
		 */
		do_action( 'safariotravel_blog_posts_meta' );

		/**
		 * Blog Excerpt With read more button
		 * @Hook  safariotravel_blog_posts_bottom_meta
		 *
		 * @Hooked safariotravel_blog_posts_bottom_meta_cb
		 * 
		 *
		 */
		do_action( 'safariotravel_blog_posts_bottom_meta' );
		?>
	</div>
	<div class="col-lg-9 col-md-9 ">
		<div class="feature-img">
			<?php
			/**
			 * Blog Post thumbnail
			 * @Hook  safariotravel_blog_posts_thumb
			 *
			 * @Hooked safariotravel_blog_posts_thumb_cb
			 * 
			 *
			 */
			do_action( 'safariotravel_blog_posts_thumb' );
			?>
		</div>
		<?php 
		/**
		 * Blog Post title
		 * @Hook  safariotravel_blog_posts_title
		 *
		 * @Hooked safariotravel_blog_posts_title_cb
		 * 
		 *
		 */
		do_action( 'safariotravel_blog_posts_title' );

		/**
		 * Blog Excerpt With read more button
		 * @Hook  safariotravel_blog_posts_excerpt
		 *
		 * @Hooked safariotravel_blog_posts_excerpt_cb
		 * 
		 *
		 */
		do_action( 'safariotravel_blog_posts_excerpt' );
		?>
	</div>

</div>