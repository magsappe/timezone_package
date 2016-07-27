<?php
#namespace App\Providers;
namespace Laraveldaily\Timezones;
use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
 	public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Laraveldaily\Timezones\TimezonesController');
    }		 
    public function boot()
    {
	   $this->publishes([__DIR__.'/views' => base_path('resources/views/laraveldaily/timezones'),]);       
	   $this->loadViewsFrom(__DIR__.'/views', 'timezones');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
}?>