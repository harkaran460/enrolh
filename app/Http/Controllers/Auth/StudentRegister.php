<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class StudentRegister extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function process_signup(Request $request)
    {


        $request->validate(
            [
                'first_name' => 'required',
                'date_of_birth' => 'required',
                'first_language' => 'required',
                'country_of_citizenship' => 'required',
                'passport_number' => 'required',
                'marital_status' => 'required',
                'gender' => 'required',
                'address' => 'required',
                'city_town' => 'required',
                'country' => 'required',
                'province_state' => 'required',
                'postal_code' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'phone_number' => 'required',
            ],
            [
                'first_name.required' => 'First name is required',
                'date_of_birth.required' => 'Kindly choose your date of birth',
                'first_language.required' => 'First language is required',
                'country_of_citizenship.required' => 'Country of citizenship is required',
                'passport_number.required' => 'Passport number required',
                'address.required' => 'Address isrequired',
                'city_town.required' => 'City/Town is required',
                'country.required' => 'Country is required',
                'province_state.required' => 'Province/state is required',
                'postal_code.required' => 'Postal code is required',
                'email.required' => 'Email is required',
                'email.unique' => 'Email id has already been taken',
                'password.required' => 'Password is required',
                'password.min' => 'Password can\'t be less than 6',
                'phone_number.required' => 'Phone no. is required',
            ]


        );

        // DB::table('users')->insert([
        //     'name' => $request->first_name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'user_type' => 2,
        // ]);
        $user = User::create([
            'name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => 4,
        ]);


        DB::table('student_profile')->insert([
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'date_of_birth' => $request->date_of_birth,
            'first_language' => $request->first_language,
            'country_of_citizenship' => $request->country_of_citizenship,
            'passport_number' => $request->passport_number,
            'marital_status' => $request->marital_status,
            'gender' => $request->gender,
            'address' => $request->address,
            'city_town' => $request->city_town,
            'country' => $request->country,
            'province_state' => $request->province_state,
            'postal_code' => $request->postal_code,
            'phone_number' => $request->phone_number,
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
