<?php
/**
 * Created by IntelliJ IDEA.
 * User: tjackson
 * Date: 2/8/16
 * Time: 12:11 PM
 */

namespace App\Repositories;

use App\User;
Use App\Task;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     */

    public function forUser(User $user){
        return Task::where('user_id', $user->id)->orderBy('created_at', 'asc')->get();
    }
}