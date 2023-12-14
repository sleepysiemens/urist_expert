<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;

use App\Models\Application;
use App\Models\User;
use App\Models\UserDoc;
use App\Models\Credotor;

class UserController extends Controller
{
    public function index(User $user)
    {
        $users=User::query()->where('role','=','user')->where('employee_id','=',auth()->user()->id)->get();
        $applications=Application::query()->where('user_id','=',$user->id)->get();
        if(isset($application->employee_id))
        {
            $employees=User::query()->where('role','=','employee')->get();
            return view('employee.user.index', compact(['application', 'employees', 'users', 'user']));
        }
        return view('employee.user.index', compact(['applications', 'users', 'user']));
    }

    public function add_application(User $user)
    {
        $application = Application::create([
            'fio' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'user_id' => $user->id,
        ]);

        return redirect()->route('employee.user.index', $user->id);
    }
}
