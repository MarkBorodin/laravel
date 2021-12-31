<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\History;


class HomeController extends Controller
{
    /**
     * @return \Illuminate\Http\Response|string
     */
    public function index()
    {
//        # old examples
//        $user = User::query()->where('id', 1)->first();
//        $userTask = $user->tasks->first();
//        $task = Task::query()->where('creator_id', 1)->first();
//        $taskUser = $task->user->first();


        # get task
        $task = Task::query()->where('creator_id', 1)->first();

        # get and save in variable old object status
        $json_task_old = json_encode($task);

        # do some changes ...
        $task->title = 'new title 2';
        $task->save();

        # get new object status
        $json_task_new = json_encode($task);

        # add history record to db if changes is present in object or related models
        if ($json_task_old != $json_task_new)
        {
            $message = "old: $json_task_old; new: $json_task_new";
            $historyService = app()->get('History');
            $historyService->add($task->id, $message);
        }

        # show changes history
        $task_history_records = History::query()->where('task_id', $task->id)->get();
        return $task_history_records;
    }
}
