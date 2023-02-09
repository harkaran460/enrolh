<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Payment;
use Session;
use Redirect;
use Illuminate\Support\Facades\DB;

class RazorpayController extends Controller
{
    public function payWithRazorpay()
    {
        return view('payWithRazorpay');
    }

    public function payment(Request $request)
    {
        $input = $request->all();


        $api = new Api(env('razorpay_api_key'), env('seceret_key'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if (count($input)  && !empty($input['razorpay_payment_id'])) {
            try {

                $payment->capture(array('amount' => $payment['amount']));
            } catch (\Exception $e) {
                return response()->json(['Failed' => 'Payment Failed']);
            }
        }
        if ($request->razorpay_payment_id != '') {
            $payInfo = [
                'payment_id' => $request->razorpay_payment_id,
                'student_id' => $request->student_id,
                'amount' => $request->amount,
                'appid' => $request->appid,
                'other' => $request->disc
            ];
            $payment_app =[
                'payment_amount' => $request->amount,
                'payment_status' => 2,
                'payment_date' => date('Y-m-d H:i:s')
            ];

            // return $payInfo ;
            Payment::insertGetId($payInfo);
            DB::table('student_applications')->where('app_id', $request->appid)->update($payment_app);

              $getProgramId =  DB::table('student_applications')->select('program_id')->where('app_id', $request->appid)->get();
              if(!empty($getProgramId))
              {
                 $program_id = $getProgramId[0]->program_id;
                 $getCommissionDetails =  DB::table('college_programs')->select('programs_name','commission_break_down','commission_type','amount_percentage','amount_fixed','tax_fixed','tax_percentage','tax_type')->where('id', $program_id)->get();
                    if(!empty($getCommissionDetails))
                    {
                      $programs_name         = $getCommissionDetails[0]->programs_name;
                      $commission_break_down = $getCommissionDetails[0]->commission_break_down;
                      $commission_type       = $getCommissionDetails[0]->commission_type;
                      $amount_percentage     = $getCommissionDetails[0]->amount_percentage;
                      $amount_fixed          = $getCommissionDetails[0]->amount_fixed;
                      $tax_fixed             = $getCommissionDetails[0]->tax_fixed;
                      $tax_percentage        = $getCommissionDetails[0]->tax_percentage;
                      $tax_type              = $getCommissionDetails[0]->tax_type;
                      $tax = '';
                      $commission_amt ='';
                      $final_payment_amt ='';
                      $finaldeduction = '';
                      if($commission_type=='percent')
                      {
                       $commission_amt = ($request->amount)*($amount_percentage)/100;
                       $payable_amt    =  $request->amount - $commission_amt;
                      }else{
                          $commission_amt = $amount_fixed;
                          $payable_amt    = $request->amount - $amount_fixed;
                      }
                      if(($tax_type =='exclusive')&&($tax_fixed ==0))
                      {
                       $tax  = ($request->amount)*($tax_percentage)/100;
                       $ttype = 'exclusive';
                      }
                      if(($tax_type =='exclusive')&&($tax_fixed !=0))
                      {
                       $tax = $tax_fixed;
                       $ttype = 'exclusive';
                      }

                      //inclusive
                      if(($tax_type =='inclusive')&&($tax_fixed ==0))
                      {
                       $tax  = ($request->amount)*($tax_percentage)/100;
                       $ttype = 'inclusive';
                      }
                      if(($tax_type =='inclusive')&&($tax_fixed !=0))
                      {
                       $tax = $tax_fixed;
                       $ttype = 'inclusive';
                      }

                    if($tax_type !='inclusive'){
                      if(($commission_amt !='') && ($tax !=''))
                      {
                         $finaldeduction =  $commission_amt + $tax;
                         $final_payment_amt = $request->amount -$finaldeduction;
                      }
                    }else
                    {
                        $finaldeduction =  $commission_amt;
                        $final_payment_amt = $request->amount -$finaldeduction;
                    }
                     $inviceData = [
                        'appid' =>isset($request->appid) ? $request->appid :'',
                        'email' =>isset($request->student_id) ? $request->student_id :'',
                        'amount' =>isset($request->amount) ? $request->amount :'',
                        'commission' =>isset($commission_amt) ? $commission_amt : '',
                        'tax' =>isset($tax) ? $tax : '',
                        'total_deduction'=>isset($finaldeduction) ? $finaldeduction :'',
                        'final_payable_amt'=>isset($final_payment_amt) ? $final_payment_amt : '',
                        'commission_type' =>isset($commission_type) ? $commission_type :'',
                        'tax_type' =>isset($ttype) ? $ttype :'',
                        'payment_id' =>isset($request->razorpay_payment_id) ? $request->razorpay_payment_id : '',
                        'payment_date' => date('Y-m-d H:i:s'),
                        'debite_amount' => 0,
                        'debited_by' => 0,
                        'debited_date' => date('Y-m-d H:i:s')
                    ];

                    DB::table('invice')->insert($inviceData);
                    }
              }
            return response()->json(['success' => 'paid']);
        } else {
            return response()->json(['Failed' => 'Payment Failed']);
        }
    }
}
