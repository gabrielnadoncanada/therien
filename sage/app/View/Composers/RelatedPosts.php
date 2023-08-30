<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class RelatedPosts extends Composer
{
	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'components.related-posts',
	];

	public function with()
	{
		return [
			'related_posts' => $this->getRelatedPosts(),
		];
	}

	public function getRelatedPosts()
	{
		global $post;

		$categories = get_the_category($post->ID);
		$args = [
			'post__not_in' => [$post->ID],
			'posts_per_page' => 2, // Limit the number of related posts
			'no_found_rows' => true, // Skip pagination count for performance
			'update_post_term_cache' => false, // Skip term caching for performance
		];

		if (!empty($categories)) {
			$category_ids = wp_list_pluck($categories, 'term_id');
			$args['category__in'] = $category_ids;
		} else {
			// If no categories, get posts from the same post type
			$args['post_type'] = get_post_type($post);
		}

		$related_posts_query = new WP_Query($args);

		$related_posts = [];
		if ($related_posts_query->have_posts()) {
			while ($related_posts_query->have_posts()) {
				$related_posts_query->the_post();
				$related_posts[] = [
					'title' => get_the_title(),
					'permalink' => get_permalink(),
					'excerpt' => get_the_excerpt(),
					'date' => get_the_date(),
					// Add other post details as needed
				];
			}
			wp_reset_postdata(); // Reset post data after custom loop
		}

		return $related_posts;
	}



}
