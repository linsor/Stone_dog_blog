<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate;
use App\Policies\AdminPolicy;
use App\Policies\ModeratorPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [


    ];


    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('view-admin', [AdminPolicy::class, 'view']);
        Gate::define('view-moderator', [ModeratorPolicy::class, 'view']);
    }
}
