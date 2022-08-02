<?php 
namespace App\Repositories\FamilyInfo;


use Illuminate\Support\ServiceProvider;

class FamilyInfoRepoServiceProvide extends ServiceProvider
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
        $this->app->bind('App\Repositories\FamilyInfo\FamilyInfoInterface', 'App\Repositories\FamilyInfo\FamilyInfoRepository');
    }
}