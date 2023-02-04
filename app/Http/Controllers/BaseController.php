<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaseController extends Controller
{
    public function getState(Request $request)
    {
       
        $state = DB::table('state')->select('id','state')->where('country_id',$request->college_country)->get();

        if (!$state->isEmpty()) {
            return response()->json(['message' => "State found", 'data' => $state]);
        } else {
            return response()->json(['message' => "State not found", 'data' => []]);
        }
    }
    public function getCity(Request $request)
    {
       
        $city = DB::table('city')->select('id','city')->where('state_id', $request->college_state)->get();

        if (!$city->isEmpty()) {
            return response()->json(['message' => "State found", 'data' => $city]);
        } else {
            return response()->json(['message' => "State not found", 'data' => []]);
        }
    }
}
