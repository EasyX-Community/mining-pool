<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\Resource;
use Laravel\Passport\Passport;
use Laravel\Passport\Client;
use App\Directives\Protect;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Passport::withoutCookieSerialization();
        
        // $env = $this->app->make(\Hyn\Tenancy\Environment::class);
        // //Force tenant connection for hostname if identified
        // if ($fqdn = optional($env->hostname())->fqdn) {
        //     config(['database.default' => 'tenant']);
        // }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Passport::ignoreMigrations();
    }
}
