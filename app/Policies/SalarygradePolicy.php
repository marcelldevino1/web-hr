<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Salarygrade;
use Illuminate\Auth\Access\HandlesAuthorization;

class SalarygradePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Salarygrade');
    }

    public function view(AuthUser $authUser, Salarygrade $salarygrade): bool
    {
        return $authUser->can('View:Salarygrade');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Salarygrade');
    }

    public function update(AuthUser $authUser, Salarygrade $salarygrade): bool
    {
        return $authUser->can('Update:Salarygrade');
    }

    public function delete(AuthUser $authUser, Salarygrade $salarygrade): bool
    {
        return $authUser->can('Delete:Salarygrade');
    }

    public function restore(AuthUser $authUser, Salarygrade $salarygrade): bool
    {
        return $authUser->can('Restore:Salarygrade');
    }

    public function forceDelete(AuthUser $authUser, Salarygrade $salarygrade): bool
    {
        return $authUser->can('ForceDelete:Salarygrade');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Salarygrade');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Salarygrade');
    }

    public function replicate(AuthUser $authUser, Salarygrade $salarygrade): bool
    {
        return $authUser->can('Replicate:Salarygrade');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Salarygrade');
    }

}