<?php

namespace App\Providers;

use App\Models\HasTag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share(
            'cate',
            $category = DB::table("categories")->limit(10)->get()
        );
        view()->share(
            'categories',
            $categories =    DB::table('categories')
                ->leftJoin('posts', 'categories.id', '=', 'posts.category_id')
                ->selectRaw('categories.name, categories.id as categories_id, COUNT(posts.id) as tong')
                ->groupBy('categories.name', 'categories.id')
                ->orderBy('tong', 'desc')
                ->get()
        );
        view()->share(
            'tags',
            HasTag::all()
        );
    }
}
