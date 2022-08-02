<?php 
namespace App\Repositories\EducationalInfo;


use Illuminate\Support\ServiceProvider;

class EducationalInfoRepoServiceProvide extends ServiceProvider
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
        $this->app->bind('App\Repositories\EducationalInfo\EducationalInfoInterface', 'App\Repositories\EducationalInfo\EducationalInfoRepository');
    }
}