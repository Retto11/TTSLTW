<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    public function viewAny(User $user): bool {
        return $user->role === 'admin';
    }

    public function create(User $user): bool {
        return $user->role === 'admin';
    }

    public function update(User $user, User $target): bool {
        return $user->role === 'admin';
    }

    public function delete(User $user, User $target): bool {
        return $user->role === 'admin';
    }
}

