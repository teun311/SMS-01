<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Section;
use Illuminate\Auth\Access\HandlesAuthorization;

class SectionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the section can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the section can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Section  $model
     * @return mixed
     */
    public function view(User $user, Section $model)
    {
        return true;
    }

    /**
     * Determine whether the section can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the section can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Section  $model
     * @return mixed
     */
    public function update(User $user, Section $model)
    {
        return true;
    }

    /**
     * Determine whether the section can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Section  $model
     * @return mixed
     */
    public function delete(User $user, Section $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Section  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the section can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Section  $model
     * @return mixed
     */
    public function restore(User $user, Section $model)
    {
        return false;
    }

    /**
     * Determine whether the section can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Section  $model
     * @return mixed
     */
    public function forceDelete(User $user, Section $model)
    {
        return false;
    }
}
