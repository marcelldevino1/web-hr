<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Leavetypes;
use Illuminate\Auth\Access\HandlesAuthorization;

class LeavetypesPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Leavetypes');
    }

    public function view(AuthUser $authUser, Leavetypes $leavetypes): bool
    {
        return $authUser->can('View:Leavetypes');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Leavetypes');
    }

    public function update(AuthUser $authUser, Leavetypes $leavetypes): bool
    {
        return $authUser->can('Update:Leavetypes');
    }

    public function delete(AuthUser $authUser, Leavetypes $leavetypes): bool
    {
        return $authUser->can('Delete:Leavetypes');
    }

    public function restore(AuthUser $authUser, Leavetypes $leavetypes): bool
    {
        return $authUser->can('Restore:Leavetypes');
    }

    public function forceDelete(AuthUser $authUser, Leavetypes $leavetypes): bool
    {
        return $authUser->can('ForceDelete:Leavetypes');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Leavetypes');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Leavetypes');
    }

    public function replicate(AuthUser $authUser, Leavetypes $leavetypes): bool
    {
        return $authUser->can('Replicate:Leavetypes');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Leavetypes');
    }

}