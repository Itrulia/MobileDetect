<?php namespace Itrulia\MobileDetect;

use Illuminate\Support\ServiceProvider;

class MobileDetectServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 * @var bool
	 */
	protected $defer = true;

	public function boot()
	{
		$this->package('itrulia/mobile-detect');
	}

	/**
	 * Register the service provider.
	 * @return void
	 */
	public function register()
	{
		$this->app['mobile'] = $this->app->share(
			function ($app) {
				return new \Mobile_Detect();
			}
		);
	}

	/**
	 * Get the services provided by the provider.
	 * @return array
	 */
	public function provides()
	{
		return array('mobile');
	}
}