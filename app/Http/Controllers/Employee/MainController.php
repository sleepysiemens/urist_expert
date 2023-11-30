<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;

use App\Models\Application;

class MainController extends Controller
{
    public function index()
    {
        $applications=Application::query()->where('employee_id','=',auth()->user()->id);
        return view('employee.index', compact('applications'));
    }
}
