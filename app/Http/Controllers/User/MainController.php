<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Application;
use App\Models\User;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{
    public function index()
    {
        $application=Application::query()->where('user_id','=',auth()->user()->id)->get();
        $employee=User::query()->where('id','=',$application[0]->employee_id)->get();

        return view('user.index', compact(['employee', 'application']));
    }
}
