<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function count()
    {
        $users = User::withCount('projects')->get();

        foreach ($users as $user) {
            print '<div><strong>' . $user->id . ': ' . $user->name . '</strong>: ' . $user->projects_count . '</div>';
            print '<hr />';
        }
    }

    public function max()
    {
        $users = User::withMax('projects', 'id')->get();

        foreach ($users as $user) {
            print '<div><strong>' . $user->id . ': ' . $user->name . '</strong>: ' . $user->projects_max_id . '</div>';
            print '<hr />';
        }
    }
}
