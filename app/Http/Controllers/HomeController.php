<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::with('tasks')->get();

        foreach ($users as $user) {
            print '<div><strong>' . $user->id . ': ' . $user->name . '</strong></div>';

            foreach ($user->tasks as $task) {
                print $task->description .'... ';
            }

            print '<hr />';
        }
    }
}
