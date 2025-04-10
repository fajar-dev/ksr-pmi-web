<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class VolunteerPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can('view_any_volunteer');
    }

    public function view(User $user, Volunteer $volunteer): bool
    {
        return $user->can('view_volunteer');
    }

    public function create(User $user): bool
    {
        return $user->can('create_volunteer');
    }

    public function update(User $user, Volunteer $volunteer): bool
    {
        return $user->can('update_volunteer');
    }

    public function delete(User $user, Volunteer $volunteer): bool
    {
        return $user->can('delete_volunteer');
    }

    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_volunteer');
    }

    public function forceDelete(User $user, Volunteer $volunteer): bool
    {
        return $user->can('force_delete_volunteer');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_volunteer');
    }

    public function restore(User $user, Volunteer $volunteer): bool
    {
        return $user->can('restore_volunteer');
    }

    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_volunteer');
    }

    public function replicate(User $user, Volunteer $volunteer): bool
    {
        return $user->can('replicate_volunteer');
    }

    public function reorder(User $user): bool
    {
        return $user->can('reorder_volunteer');
    }
}
