<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnterController extends Controller
{
    public function __invoke()
    {
       if((isset(auth()->user()->role)) OR (auth()->user()->role !== 'admin'))
        {
            return redirect()->route('admin.main.index');
        }
        elseif((isset(auth()->user()->role)) OR (auth()->user()->role !== 'employee'))
        {
            return redirect()->route('employee.main.index');
        }
        elseif((isset(auth()->user()->role)) OR (auth()->user()->role !== 'user'))
        {
            return redirect()->route('user.main.index');
        }
        else
        {
            return redirect()->route('logout');
        }
    }
}
