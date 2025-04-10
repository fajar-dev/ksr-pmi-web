<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Gallery;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class GalleryPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can('view_any_gallery');
    }

    public function view(User $user, Gallery $gallery): bool
    {
        return $user->can('view_gallery');
    }

    public function create(User $user): bool
    {
        return $user->can('create_gallery');
    }

    public function update(User $user, Gallery $gallery): bool
    {
        return $user->can('update_gallery');
    }

    public function delete(User $user, Gallery $gallery): bool
    {
        return $user->can('delete_gallery');
    }

    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_gallery');
    }

    public function forceDelete(User $user, Gallery $gallery): bool
    {
        return $user->can('force_delete_gallery');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_gallery');
    }

    public function restore(User $user, Gallery $gallery): bool
    {
        return $user->can('restore_gallery');
    }

    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_gallery');
    }

    public function replicate(User $user, Gallery $gallery): bool
    {
        return $user->can('replicate_gallery');
    }

    public function reorder(User $user): bool
    {
        return $user->can('reorder_gallery');
    }
}
