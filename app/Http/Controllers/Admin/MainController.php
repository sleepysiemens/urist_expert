<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Application;
use App\Models\User;

class MainController extends Controller
{
    public function index()
    {
        $applications=Application::all();
        $users=User::query()->where('role','=','employee')->get();


        return view('admin.index', compact('applications', 'users'));
    }
}
