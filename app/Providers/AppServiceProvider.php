<?php

namespace App\Providers;

use App\Project;
use App\Service;
use Illuminate\Support\Facades\View;
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

        View::share('projects_footer', Project::limit(4)->orderBy('id', 'DESC')->get());

        view()->composer(['blogs', 'blogs_category', 'blog_detail'], function ($view){
            $view->with('popular_posts', Blog::popularLast(3)->limit(6)->get());
        });

        view()->composer(['products', 'products_category', 'product_detail'], function ($view){
            $view->with('popular_products', Product::popularLast(3)->limit(6)->get());
        });
    }
}
