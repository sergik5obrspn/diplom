<?php

namespace App\Providers;

use App\Interfaces\FrontendRepositoryInterface;
use App\Repositories\FrontendRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer('frontend.*', function($view){
            $view->with('placeholder', asset('images/placeholder.jpg'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FrontendRepositoryInterface::class,function(){
            return new FrontendRepository;
        }
        );
    }
}
