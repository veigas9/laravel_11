<?php

namespace App\Providers;

// use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        //Verifique se o usuário é administrador
        Gate::define('is-admin', function (User $user): bool {
            return $user->isAdmin();
        });

        //Veifique se o usuário é o dono do recurso
        Gate::define('is-owner', function (User $user, object $register): bool {
            return $user->id === $register->user_id;
        });
    }
}
