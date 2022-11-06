<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('user')) {
            return view('userdash');
        }elseif (Auth::user()->hasRole('blogwriter')) {
            return view('blogwriterdash');
        }elseif (Auth::user()->hasRole('admin')) {
            $users = User::all();
            return view('dashboard', [
                'users' => $users
            ]);
        }
    }

    public function myprofile()
    {
        return view('myprofile');
    }

    public function createpost()
    {
        return view('createpost');
    }
}
