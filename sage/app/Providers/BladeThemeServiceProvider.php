<?php

namespace App\Providers;

use Illuminate\View\Compilers\BladeCompiler;
use Roots\Acorn\Sage\SageServiceProvider;

const CONFIG_FILE = __DIR__ . '/../blade-components.php';
const VIEW_FOLDER = __DIR__ . '/../../resources/views';

class BladeThemeServiceProvider extends SageServiceProvider
{

	public function register()
	{
		$this->mergeConfigFrom(CONFIG_FILE, 'blade-components');
	}

	public function boot()
	{
		$this->bootResources();
		$this->bootBladeComponents();
		$this->bootPublishing();
	}

	private function bootResources()
	{
		$this->loadViewsFrom(VIEW_FOLDER, 'blade-components');
	}

	private function bootBladeComponents()
	{
		$this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
			foreach (config('blade-components.components', []) as $name => $component) {
				$blade->component($name, $component['class']);
			}
		});
	}

	private function bootPublishing()
	{
		if (!$this->app->runningInConsole()) {
			return;
		}

		$this->publishes([CONFIG_FILE => $this->app->configPath('blade-components.php')], 'blade-components');
		$this->publishes([VIEW_FOLDER => $this->app->resourcePath('views/vendor/blade-components')], 'blade-components-views');
	}
}