<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function has()
    {
        $users = User::has('projects')->with('projects')->get();

        foreach ($users as $user) {
            print '<div><strong>' . $user->id . ': ' . $user->name . '</strong></div>';

            foreach ($user->projects as $project) {
                print $project->title .'... ';
            }

            print '<hr />';
        }
    }

    public function wherehas()
    {
        $users = User::whereHas('projects', function (Builder $query) {
            $query->where('title', 'LIKE', '%as%');
        })
            ->with('projects')
            ->get();

//        $users = User::whereRelation('projects', 'title', 'LIKE', '%as%')->with('projects')->get();

        foreach ($users as $user) {
            print '<div><strong>' . $user->id . ': ' . $user->name . '</strong></div>';

            foreach ($user->projects as $project) {
                print $project->title .'... ';
            }

            print '<hr />';
        }
    }
}
