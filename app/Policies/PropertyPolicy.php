<?php

namespace App\Policies;

use App\Property;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PropertyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any properties.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->id == auth()->id();
    }

    /**
     * Determine whether the user can view the property.
     *
     * @param  \App\User  $user
     * @param  \App\Property  $property
     * @return mixed
     */
    public function view(User $user, Property $property)
    {
        return $user->id == $property->user_id;
    }

    /**
     * Determine whether the user can create properties.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the property.
     *
     * @param  \App\User  $user
     * @param  \App\Property  $property
     * @return mixed
     */
    public function update(User $user, Property $property)
    {
        //
    }

    /**
     * Determine whether the user can delete the property.
     *
     * @param  \App\User  $user
     * @param  \App\Property  $property
     * @return mixed
     */
    public function delete(User $user, Property $property)
    {
        //
    }

    /**
     * Determine whether the user can restore the property.
     *
     * @param  \App\User  $user
     * @param  \App\Property  $property
     * @return mixed
     */
    public function restore(User $user, Property $property)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the property.
     *
     * @param  \App\User  $user
     * @param  \App\Property  $property
     * @return mixed
     */
    public function forceDelete(User $user, Property $property)
    {
        //
    }
}
