<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{


    use AuthenticatesUsers;

    // protected $redirectTo = '/consignments';


    protected function authenticated(Request $request, $user)
    {
        if ($user->user_type == '1') {
            return redirect('admin-dashboard');
        } elseif ($user->user_type == '2') {
            return redirect('collegeDashboard');
        } elseif ($user->user_type == '3') {
            return redirect('agentDashboard');
        }elseif ($user->user_type == '4') {
            return redirect('studentDashboard');
        }elseif ($user->user_type == '5') {
            return redirect('agentDashboard');
        }
        elseif ($user->user_type == '6') {
            return redirect('agentDashboard');
        }

    }



    protected function credentials(\Illuminate\Http\Request $request)
    {
        // if ($request->password != $request->confirm_password) {
        //     throw ValidationException::withMessages([
        //         $this->username() => [trans('auth.confirm_password')],
        //     ]);
        // }
        return array_merge($request->only($this->email(), 'password'));
    }

    public function email()
    {
        return 'email';
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
