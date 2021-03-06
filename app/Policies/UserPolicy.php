<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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

    public function edit(User $currentUser, User $userToEdit)
    {
        return $currentUser->is($userToEdit);
    }

    public function update(User $currentUser, User $userToEdit)
    {
        return $currentUser->is($userToEdit);
    }
}
