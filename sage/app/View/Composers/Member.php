<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class Member extends Composer
{
	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'components.members',
	];

	public function with()
	{
		return [
			'members' => $this->getAll(),
		];
	}

	/**
	 * Returns the services.
	 *
	 * @return array
	 */
	public function getAll()
	{
		$args = [
			'post_type' => 'member',
			'posts_per_page' => -1,
			'fields' => 'ids', // Only retrieve post IDs
			'no_found_rows' => true, // Skip pagination count for performance
			'update_post_term_cache' => false, // Skip term caching for performance
		];
		$query = new WP_Query($args);

		$members = [];
		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				$members[] = [
					'title' => get_the_title(),
					'image' => get_the_post_thumbnail_url(get_the_ID(), 'medium'),
					'roles' => wp_get_post_terms(get_the_ID(), 'member_role', ['fields' => 'names'])
				];
			}
			wp_reset_postdata();
		}

		return $members;
	}
}
