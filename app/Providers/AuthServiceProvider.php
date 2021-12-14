<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\InnerContentPolicy;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\innerController;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        innerController::class => InnerContentPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /*Gate::define('view-protected-part', function (?User $user){
            if($user && $user->name == 'Alex'){
                return Response::allow('Вам разрешено');
                
            }
            return Response::deny('Вам запрещено');
            
        });*/
    }
}
