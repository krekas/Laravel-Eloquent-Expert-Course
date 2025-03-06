<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $tasks = Task::select('id', 'description', DB::raw('MONTH(created_at) as created_month'))->get();

//        $tasks = Task::selectRaw('id, description, MONTH(created_at) as created_month')->get();

//        $tasks = Task::selectRaw('id, description, MONTH(created_at) as created_month')
//            ->whereRaw('MONTH(created_at) = 2')
//            ->get();

//        $tasks = Task::selectRaw('id, description, MONTH(created_at) as created_month')
//            ->orderByRaw('MONTH(created_at)')
//            ->get();

        foreach ($tasks as $task) {
            dump($task->id . ': ' . $task->description . ' - month ' . $task->created_month);
        }
    }
}
