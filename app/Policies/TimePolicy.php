<?php

namespace App\Policies;

use App\Time;
use App\User;
use Facade\FlareClient\Truncation\TruncationStrategy;
use Illuminate\Auth\Access\HandlesAuthorization;

class TimePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any times.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(?User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the time.
     *
     * @param  \App\User  $user
     * @param  \App\Time  $time
     * @return mixed
     */
    public function view(?User $user, Time $time)
    {
        return true;
    }

    /**
     * Determine whether the user can create times.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the time.
     *
     * @param  \App\User  $user
     * @param  \App\Time  $time
     * @return mixed
     */
    public function update(User $user, Time $time)
    {
        return $user->id === $time->user_id; 
    }

    /**
     * Determine whether the user can delete the time.
     *
     * @param  \App\User  $user
     * @param  \App\Time  $time
     * @return mixed
     */
    public function delete(User $user, Time $time)
    {
        return $user->id === $time->user_id;
    }

    /**
     * Determine whether the user can restore the time.
     *
     * @param  \App\User  $user
     * @param  \App\Time  $time
     * @return mixed
     */
    public function restore(User $user, Time $time)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the time.
     *
     * @param  \App\User  $user
     * @param  \App\Time  $time
     * @return mixed
     */
    public function forceDelete(User $user, Time $time)
    {
        //
    }
}
