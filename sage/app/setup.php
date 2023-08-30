<?php

namespace App;

use function Roots\bundle;

add_action('wp_enqueue_scripts', function (): void {
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_enqueue_style('fontawesome', '/wp-content/mu-plugins/icon-acf-field/assets/css/fontawesome.css', array(), '1.0.0');

	$localized_object_name = 'sage';
	$localized_vars = [
		'primary' => __('Primary', 'sage')
	];

	if (hmr_enabled()) {
		$asset = 'resources/scripts/main.js';
		$namespace = strtolower(wp_get_theme()->get('Name'));

		wp_enqueue_script($namespace, hmr_assets($asset), array(), null, true);
		wp_localize_script($namespace, $localized_object_name, $localized_vars);
	} else {
		bundle('main')->enqueue()->localize($localized_object_name, $localized_vars);
	}
}, 100);

add_action('enqueue_block_editor_assets', function (): void {
	if (hmr_enabled()) {
		$asset = 'resources/scripts/editor.js';
		$namespace = strtolower(wp_get_theme()->get('Name'));

		wp_enqueue_script($namespace, hmr_assets($asset), array(), null, true);
	} else {
		bundle('editor')->enqueue();
	}
}, 100);

add_action('after_setup_theme', function (): void {
	add_post_type_support('page', 'excerpt');
	add_theme_support('soil', [
		'clean-up',
		'nav-walker',
		'nice-search',
		'relative-urls'
	]);
	add_theme_support('customize-selective-refresh-widgets');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('responsive-embeds');
	add_theme_support('html5', [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
		'script',
		'style'
	]);

	remove_theme_support('block-templates');
	remove_theme_support('core-block-patterns');

	register_nav_menus([
		'primary_navigation' => __('Primary Navigation', 'sage')
	]);


	set_image_sizes();
}, 20);

add_action('widgets_init', function () {
	$config = [
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	];

	register_sidebar([
			'name' => __('Primary', 'sage'),
			'id' => 'sidebar-primary'
		] + $config);

	register_sidebar([
			'name' => __('Footer', 'sage'),
			'id' => 'sidebar-footer'
		] + $config);
});

add_action('init', function () {
	remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
	remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
	remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	add_filter('tiny_mce_plugins', function ($plugins) {
		if (is_array($plugins)) {
			return array_diff($plugins, array('wpemoji'));
		} else {
			return array();
		}
	});
	reset_image_sizes();
});
