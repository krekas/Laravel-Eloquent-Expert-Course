<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('email', 'admin@admin.com')->first();
        if (! $user) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);
        }

        // firstOrCreate()
//        $user = User::firstOrCreate(
//            ['email' => 'admin@admin.com'],
//            ['name' => 'Admin', 'password' => bcrypt('password')]
//        );

        // firstOrNew()
//        $user = User::firstOrNew(
//            ['email' => 'admin@admin.com'],
//            ['name' => 'Admin', 'password' => bcrypt('password')]
//        );

        // updateOrCreate()
//        $user = User::updateOrCreate(
//            ['email' => 'admin@admin.com'],
//            ['name' => 'Admin Updated', 'password' => bcrypt('password')]
//        );

        // upsert
//        User::upsert([
//            ['email' => 'admin@admin.com', 'name' => 'Admin 1', 'password' => bcrypt('password')],
//            ['email' => 'admin2@admin.com', 'name' => 'Admin 2', 'password' => bcrypt('password')],
//        ], ['email'], ['name', 'password']);

        return $user->id . ' - ' . $user->name;
    }
}
