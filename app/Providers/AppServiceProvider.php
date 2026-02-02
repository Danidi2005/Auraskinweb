<?php

namespace App\Providers;

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
        // Share categories with ALL views using View::share as requested
        // Using try-catch or Schema check is good practice but for now direct is fine if DB exists
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('categories')) {
                 $categories = \App\Models\Category::all();
                 \Illuminate\Support\Facades\View::share('categories', $categories);
                 \Illuminate\Support\Facades\View::share('navGrouped', $categories->groupBy('group'));
            }
        } catch (\Exception $e) {
            // Ignored during migrations
        }
    }
}
