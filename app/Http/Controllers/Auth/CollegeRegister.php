<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CollegeRegister extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function process_college_signup(Request $request)
    {
       
        $college_name    = $request->college_name;
        $email           = $request->email;
        $password        = $request->password;
        $college_country = $request->college_country;
        $college_status  = $request->college_status;
        $college_address = $request->college_address;
        $application_fee = $request->application_fee;
        $average_graduate_program      = $request->average_graduate_program;
        $average_undergraduate_program = $request->average_undergraduate_program;
        $cost_of_living                = $request->cost_of_living;
        $founded                       = $request->founded;
        $school_id                     = $request->school_id;
        $provider_id_number            = $request->provider_id_number;
        $institution_type              = $request->institution_type;

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
        ]);

        if($validator->fails()) {

            echo "email_exist";
            die;
        }else {

        $user = User::create([
            'name' => $request->college_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => 1,
            
        ]);


        DB::table('colleges')->insert([
            'user_id'         => $user->id,
            'user_type'         => 0,
            'college_name'    => $request->college_name,
            'college_country' => $request->college_country,
            'status'         => $request->college_status,
            'college_address' => $request->college_address,
            'application_fee' => $request->application_fee,
            'average_graduate_program'      => $request->average_graduate_program,
            'average_undergraduate_program' => $request->average_undergraduate_program,
            'cost_of_living'  => $request->cost_of_living,
            'founded'         => $request->founded,
            'school_id'       => $request->school_id,
            'provider_id_number' => $request->provider_id_number,
            'institution_type'   => $request->institution_type,
    
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        echo "success";die;
    }
}
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
