<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;

use App\Models\Application;
use App\Models\User;
use App\Models\UserDoc;
use App\Models\Credotor;

class MainController extends Controller
{
    public function index()
    {
        $applications=Application::all();
        $employees=User::query()->where('role','=','employee')->get();
        $users=User::query()->where('role','=','user')->where('employee_id','=',auth()->user()->id)->get();

        return view('employee.index', compact(['applications', 'employees', 'users']));
    }
}
