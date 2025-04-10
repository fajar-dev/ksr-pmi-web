<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Position;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class PositionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can('view_any_position');
    }

    public function view(User $user, Position $position): bool
    {
        return $user->can('view_position');
    }

    public function create(User $user): bool
    {
        return $user->can('create_position');
    }

    public function update(User $user, Position $position): bool
    {
        return $user->can('update_position');
    }

    public function delete(User $user, Position $position): bool
    {
        return $user->can('delete_position');
    }

    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_position');
    }

    public function forceDelete(User $user, Position $position): bool
    {
        return $user->can('force_delete_position');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_position');
    }

    public function restore(User $user, Position $position): bool
    {
        return $user->can('restore_position');
    }

    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_position');
    }

    public function replicate(User $user, Position $position): bool
    {
        return $user->can('replicate_position');
    }

    public function reorder(User $user): bool
    {
        return $user->can('reorder_position');
    }
}
