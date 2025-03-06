<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return User::where(\DB::raw('DATE(created_at)'), '2024-03-01')->first();

//        return User::whereDate('created_at', '2024-03-01')->first();

//        User::whereYear('created_at', '2024')->first();
//        User::whereMonth('created_at', '03')->first();
//        User::whereDay('created_at', '1')->first();
    }
}
