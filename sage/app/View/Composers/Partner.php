<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class Partner extends Composer
{
	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'components.partners',
	];

	public function with()
	{
		return [
			'partners' => $this->getAll(),
		];
	}

	/**
	 * Returns the services.
	 *
	 * @return array
	 */
	public function getAll()
	{
		$query = new WP_Query([
			'post_type' => 'partner',
			'posts_per_page' => -1,
		]);

		$partners = [];
		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				$partners[] = [
					'title' => get_the_title(),
					'image' => get_the_post_thumbnail_url()
				];
			}
			wp_reset_postdata();
		}

		return $partners;
	}
}
