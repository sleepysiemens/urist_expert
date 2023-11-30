<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Application;

class MainController extends Controller
{
    public function index()
    {
        $applications=Application::all();
        return view('admin.index', compact('applications'));
    }
}
