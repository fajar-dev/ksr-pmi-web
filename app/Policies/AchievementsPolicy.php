<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Achievements;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class AchievementsPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can('view_any_achievements');
    }

    public function view(User $user, Achievements $achievements): bool
    {
        return $user->can('view_achievements');
    }

    public function create(User $user): bool
    {
        return $user->can('create_achievements');
    }

    public function update(User $user, Achievements $achievements): bool
    {
        return $user->can('update_achievements');
    }

    public function delete(User $user, Achievements $achievements): bool
    {
        return $user->can('delete_achievements');
    }

    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_achievements');
    }

    public function forceDelete(User $user, Achievements $achievements): bool
    {
        return $user->can('force_delete_achievements');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_achievements');
    }

    public function restore(User $user, Achievements $achievements): bool
    {
        return $user->can('restore_achievements');
    }

    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_achievements');
    }

    public function replicate(User $user, Achievements $achievements): bool
    {
        return $user->can('replicate_achievements');
    }

    public function reorder(User $user): bool
    {
        return $user->can('reorder_achievements');
    }
}
