<?php

namespace App\Policies;

use App\Tarea;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TareaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any tareas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    public function propietario(User $user, Tarea $tarea)
    {
        return $tarea->user_id == $user->id;
    }

    /**
     * Determine whether the user can view the tarea.
     *
     * @param  \App\User  $user
     * @param  \App\Tarea  $tarea
     * @return mixed
     */
    public function view(User $user, Tarea $tarea)
    {
        //
        return $tarea->user_id == $user->id;
    }

    /**
     * Determine whether the user can create tareas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the tarea.
     *
     * @param  \App\User  $user
     * @param  \App\Tarea  $tarea
     * @return mixed
     */
    public function update(User $user, Tarea $tarea)
    {
        //
    }

    /**
     * Determine whether the user can delete the tarea.
     *
     * @param  \App\User  $user
     * @param  \App\Tarea  $tarea
     * @return mixed
     */
    public function delete(User $user, Tarea $tarea)
    {
        //
    }

    /**
     * Determine whether the user can restore the tarea.
     *
     * @param  \App\User  $user
     * @param  \App\Tarea  $tarea
     * @return mixed
     */
    public function restore(User $user, Tarea $tarea)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the tarea.
     *
     * @param  \App\User  $user
     * @param  \App\Tarea  $tarea
     * @return mixed
     */
    public function forceDelete(User $user, Tarea $tarea)
    {
        //
    }
}
