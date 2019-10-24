<?php

namespace App\Providers;

use App\Shipping;
use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        // $shipping_lines = Shipping::paginate(6);

        // View::share('shipping_lines', $shipping_lines);

        Schema::defaultStringLength(191);

        if (User::count() == 0) {
            User::create([
                'name' => 'Mohamed Johnson',
                'email' => 'mjohnson@mousquetaire.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
