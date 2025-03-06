<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = Task::query();

        if ($request->has('user_id')) {
            $query->where('user_id', $request->integer('user_id'));
        }

        if ($request->has('completed')) {
            $query->where('is_completed', $request->boolean('completed'));
        }

        $tasks = $query->get();

//        $tasks = Task::query()
//            ->when($request->integer('user_id'), function (Builder $query) use ($request) {
//                $query->where('user_id', $request->integer('user_id'));
//            })
//            ->when($request->boolean('completed'), function (Builder $query) use ($request) {
//                $query->where('is_completed', $request->boolean('completed'));
//            })->get();

        foreach ($tasks as $task) {
            dump($task->id . ': ' . $task->description);
        }
    }
}
