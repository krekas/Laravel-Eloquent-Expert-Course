<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::with('photos')->get();

        foreach ($users as $user) {
            print('<div>' . $user->id . ': ' . $user->name . ' (');
            foreach ($user->photos as $photo) {
                print($photo->filename . ', ');
            }
            print(')</div>');
        }

        print(' <hr />');

        $tasks = Task::with('photos')->get();

        foreach ($tasks as $task) {
            print('<div>' . $task->id . ': ' . $task->description . ' (');
            foreach ($task->photos as $photo) {
                print($photo->filename . ', ');
            }
            print(')</div>');
        }
    }
}
