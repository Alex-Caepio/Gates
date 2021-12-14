<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class InnerContentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function viewProtectedPart(?User $user){
        if($user && $user->name == 'Alex'){
            return Response::allow('Вам разрешено');
            
        }
        return Response::deny('Вам запрещено');

    }
}
