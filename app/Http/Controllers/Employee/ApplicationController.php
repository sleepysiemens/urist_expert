<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;

use App\Models\Application;
use App\Models\User;

class ApplicationController extends Controller
{
    public function add_employee(Application $application)
    {
        $applications=Application::query()->where('employee_id','=', auth()->user()->id)->get();
        $users=User::query()->where('role','=','employee')->get();
        return view('employee.application.add_employee', compact(['applications', 'application', 'users']));
    }

    public function update(Application $application)
    {
        $data=request()->validate(['employee_id'=>'required|integer']);

        $application->update($data);

        return redirect()->route('employee.main.index');
    }
}
