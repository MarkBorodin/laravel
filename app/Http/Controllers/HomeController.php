<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * @return \Illuminate\Http\Response|string
     */
    public function index()
    {
        # test

        $user = User::query()->where('id', 1)->first();
        $userTask = $user->tasks->first();

        $task = Task::query()->where('creator_id', 1)->first();
        $taskUser = $task->user->first();

        return 'task:' . '<br>' . $userTask . '<br>' . 'user:' . '<br>' . $taskUser;
    }
}
