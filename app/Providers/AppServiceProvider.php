<?php

namespace App\Providers;

use App\Shipping;
use App\User;
use Hash;
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
        $shipping_lines = Shipping::paginate(6);

        View::share('shipping_lines', $shipping_lines);

        Schema::defaultStringLength(191);

        if (User::count() == 0) {
            User::create([
                'name' => 'Maersk Line',
                'email' => 'admin@safmarine.com',
                'email_verified_at' => now(),
                'password' => Hash::make('maerskline'),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
