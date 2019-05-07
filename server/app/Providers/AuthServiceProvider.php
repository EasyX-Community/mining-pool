<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;
use Laravel\Passport\Console\InstallCommand;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];


    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes();
        
        $this->commands([
            \Laravel\Passport\Console\InstallCommand::class,
            \Laravel\Passport\Console\ClientCommand::class,
            \Laravel\Passport\Console\KeysCommand::class,
        ]);
        
        Passport::tokensCan([
            'edit' => 'Can edit resources',
            'create' => 'Can add new resources',
            'delete' => 'Can delete resources',
        ]);
        Passport::tokensExpireIn(\Carbon\Carbon::now()->addMinutes(10));
        Passport::refreshTokensExpireIn(\Carbon\Carbon::now()->addDays(1));
        Passport::personalAccessTokensExpireIn(\Carbon\Carbon::now()->addDays(1));
    }
}
