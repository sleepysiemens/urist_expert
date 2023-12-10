<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnterController extends Controller
{
    public function __invoke()
    {

       if((auth()->user()!=NULL) AND (auth()->user()->role == 'admin'))
        {
            return redirect()->route('admin.main.index');
        }
        elseif((auth()->user()!=NULL) AND (auth()->user()->role == 'employee'))
        {
            return redirect()->route('employee.main.index');
        }
        elseif((auth()->user()!=NULL) AND (auth()->user()->role == 'user'))
        {
            return redirect()->route('user.main.index');
        }
        else
        {
            return redirect()->route('logout');
        }
    }
}
