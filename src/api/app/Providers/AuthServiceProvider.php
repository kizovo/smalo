<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        \App\Models\Model::class => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        if (!$this->app->routesAreCached()) {
            Passport::tokensCan([
                'create' => 'can add',
                'update' => 'can update',
                'delete' => 'can delete',
            ]);
            Passport::routes();
            Passport::personalAccessTokensExpireIn(now()->addDays(1));
            Passport::tokensExpireIn(now()->addDays(1));
            Passport::refreshTokensExpireIn(now()->addDays(1));
            Passport::loadKeysFrom(storage_path());
        }
    }
}
