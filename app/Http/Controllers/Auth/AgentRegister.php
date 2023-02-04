<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AgentRegister extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function process_agent_signup(Request $request)
    {


        $request->validate(
            [
                'country' => 'required',
                'school_name' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'contact_title' => 'required',
                'additional_comments' => 'required',
            ],
            [
                'country.required' => 'Kindly select the country',
                'school_name.required' => 'School name is required',
                'first_name.required' => 'First name is required',
                'last_name.required' => 'Last name is required',
                'contact_title.required' => 'Contect is required',
                'additional_comments.required' => 'Additional comments is required',
                'email.required' => 'Email is required',
                'email.unique' => 'Email id has already been taken',
                'password.required' => 'Password is required',
                'password.min' => 'Password can\'t be less than 6',
            ]


        );

        $user = User::create([
            'name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => 3,
            
        ]);


        DB::table('agent_details')->insert([
            'user_id' => $user->id,
            'country' => $request->country,
            'school_name' => $request->school_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'contact_title' => $request->contact_title,
            'additional_comments' => $request->additional_comments,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        session()->flash('message', 'Your account has been created kindly login with email and password');

        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
