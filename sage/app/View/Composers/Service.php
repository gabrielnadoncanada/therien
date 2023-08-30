<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class Service extends Composer
{
	/**
	 * List of views served by this composer.
	 *
	 * @var array
	 */
	protected static $views = [
		'components.services',
	];

	public function with()
	{
		return [
			'services' => $this->getAll(),
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
			'post_type' => 'service',
			'posts_per_page' => -1,
		]);

		$services = [];
		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();
				$services[] = [
					'title' => get_the_title(),
					'excerpt' => get_the_excerpt(),
				];
			}
			wp_reset_postdata();
		}

		return $services;
	}
}
