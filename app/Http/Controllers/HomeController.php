<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            ['name' => 'Admin', 'password' => bcrypt('password')]
        );

        dump($user->wasRecentlyCreated ? 'Created' : 'Found');

        $user->name = 'Admin updated';
        dump($user->isDirty() ? 'Edited' : 'Unedited');
        dump($user->isDirty('name') ? 'Name edited' : 'Name not edited');
        dump($user->isDirty('email') ? 'Email edited' : 'Email not edited');

        dump($user->wasChanged() ? 'Changed' : 'Unchanged');
        $user->save();
        dump($user->wasChanged() ? 'Changed' : 'Unchanged');
        dump($user->wasChanged('name') ? 'Name changed' : 'Name not changed');
        dump($user->wasChanged('email') ? 'Email changed' : 'Email not changed');
    }
}
