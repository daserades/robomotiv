<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Blog;
use App\Product;

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

        view()->composer(['blogs', 'blogs_category', 'blog_detail'], function ($view){
            $view->with('popular_posts', Blog::popularLast(3)->limit(6)->get());
        });

        view()->composer(['products', 'products_category', 'product_detail'], function ($view){
            $view->with('popular_products', Product::popularLast(3)->limit(6)->get());
        });
    }
}
