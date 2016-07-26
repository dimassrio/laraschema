<?php namespace Dimassrio\Laraschema\JsonSchemaValidator;

use Illuminate\Support\ServiceProvider;

class JsonSchemaValidatorServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;
	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('dimassrio/laraschema');
	}
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('jsonSchemaValidator',function(){
			return new JsonSchemaValidator;
		});
	}
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}
}
