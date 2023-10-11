<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        $this->registerPolicies();

        Gate::define('access-admin', function(User $user){
            return $user->isAdmin()
                ? Response::allow()
                : Response::denyWithStatus(403, 'Vous devez être adiministrateur');
        });

        Gate::define('can-login', function (User $user){
           return $user->isActivated()
           ? Response::allow()
           : Response::denyWithStatus(308, 'Vous n\'êtesd pas autorisé.e à vous connecter');
        });
    }
}
