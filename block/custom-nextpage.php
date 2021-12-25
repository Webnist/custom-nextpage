<?php

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/how-to-guides/block-tutorial/writing-your-first-block-type/
 */
function create_block_custom_nextpage_block_init() {
	register_block_type( __DIR__ );

	/**
	 * Load the URL of the image used in edit.js.
	 * Chose wp_localize_script because I don't need to create a custom endpoint.
	 * This time select 'jquery' handle. The handle name may change in the future.
	 *
	 * @see https://developer.wordpress.org/themes/basics/including-css-javascript/#default-scripts-included-and-registered-by-wordpress
	 */
	wp_localize_script(
		'jquery',
		'image_data',
		array(
			'customNextPageImage' => plugins_url( '../admin/tinymce/plugins/customnextpage/img/custom-next-page.png', __FILE__ )
		)
	);
}
add_action( 'init', 'create_block_custom_nextpage_block_init' );
