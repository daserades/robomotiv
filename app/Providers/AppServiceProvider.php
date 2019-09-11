<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        setLocale(LC_TIME, 'tr-TR');

        /*view()->composer(['blogs', 'blogs_category', 'blog_detail'], function ($view){
            $view->with('popular_posts', Blog::popularLast(3)->limit(6)->get());
        });*/
    }
}
