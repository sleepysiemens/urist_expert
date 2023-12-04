<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Application;
use App\Models\User;

class ApplicationController extends Controller
{
    public function add_employee(Application $application)
    {
        $applications=Application::all();
        $users=User::query()->where('role','=','employee')->get();
        return view('admin.application.add_employee', compact(['applications', 'application', 'users']));
    }

    public function update(Application $application)
    {
        $data=request()->validate(['employee_id'=>'required|integer']);

        $application->update($data);

        return redirect()->route('admin.main.index');
    }
}
