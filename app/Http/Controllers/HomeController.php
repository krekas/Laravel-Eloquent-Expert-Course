<?php

namespace App\Http\Controllers;

use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with('users')->get();

        foreach ($projects as $project) {
            print $project->id . ': ' . $project->title . ' (';

            foreach ($project->users as $user) {
                print $user->email .' <u>' . $user->pivot->is_active . '</u> <i>' . $user->pivot->created_at . '</i>; ';
            }

            print ')<hr />';
        }

//        $projects = Project::with('activeUsers')->get();
//
//        foreach ($projects as $project) {
//            print $project->id . ': ' . $project->title . ' (';
//
//            foreach ($project->activeUsers as $user) {
//                print $user->email .' <u>' . $user->pivot->is_active . '</u> <i>' . $user->pivot->created_at . '</i>; ';
//            }
//
//            print ')<hr />';
//        }
    }
}
