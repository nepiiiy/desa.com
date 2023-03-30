<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        Paginator::useBootstrap();

        // $data_users = User::where('status', 'aktif')->where('role','admindesa')->orderBy('created_at', 'desc')->get();
        // View::share('data_is', $data_users);
    
        // mem-passing data secara global ke setiap view yang memanggil 'layouts.app'
    }

    

}
