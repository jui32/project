<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $items=Item::all();
        View::share('items',$items);

        $categories=Category::all();
        View::share('categories',$categories);
    

    
        Paginator::useBootstrap();

        if(Schema::hasTable('categories'))
        {
            $categories=Category::all();
            View::share('headerCategories',$categories);
        }


    }
}
