<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Scopes\VerifiedScope;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::whereNotNull('email_verified_at')->get();
//        $users = User::verified()->get();

//        $users = User::verified()->typeOf('admin')->get();

//        $users = User::all();

//        $users = User::withoutGlobalScopes()->get();

//        $users = User::withoutGlobalScope(VerifiedScope::class)->get();

        foreach ($users as $user) {
            dump($user->id . ': ' . $user->name);
        }
    }
}
