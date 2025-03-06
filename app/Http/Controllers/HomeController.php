<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $users = User::whereNotNull('email_verified_at')
            ->whereDay('created_at', 4)
            ->orWhereDay('created_at', 5)
            ->get();

//        $users = User::whereNotNull('email_verified_at')
//            ->where(function (Builder $query) {
//                $query->whereDay('created_at', 4)
//                    ->orWhereDay('created_at', 5);
//            })
//            ->get();

//        $search = $request->input('search');

//        $users = User::whereNotNull('email_verified_at')
//            ->where(function (Builder $query) use ($search) {
//                $query->where('name', 'LIKE', "%{$search}%")
//                    ->orWhere('email', 'LIKE', "%{$search}%");
//            })
//            ->get();

//        $users = User::whereNotNull('email_verified_at')
//            ->whereAny([
//                'name',
//                'email'
//            ], 'LIKE', "%{$search}%")
//            ->get();

//        $users = User::whereNotNull('email_verified_at')
//            ->whereAll([
//                'name',
//                'email'
//            ], 'LIKE', "%{$search}%")
//            ->get();

        foreach ($users as $user) {
            dump($user->id . ': ' . $user->name);
        }
    }
}
