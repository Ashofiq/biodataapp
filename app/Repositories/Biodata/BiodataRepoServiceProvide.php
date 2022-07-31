<?php 
namespace App\Repositories\Biodata;


use Illuminate\Support\ServiceProvider;

class BiodataRepoServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Biodata\BiodataInterface', 'App\Repositories\Biodata\BiodataRepository');
    }
}