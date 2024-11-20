<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Mail\OTPMail;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
  
    function UserRegistration(Request $request){

        try{User::create([
            'firstName'=>$request->input('firstName'),
            'lastName'=>$request->input('lastName'),
            'email'=>$request->input('email'),
            'mobile'=>$request->input('mobile'),
            'password'=>$request->input('password'),
        ]);
        return response()->json([
            'status' => "success",
            'message'=>'User Registration Successfully'

        ]);

        }
        catch(Exception $e)
        {
            return response()->json([
                'status'=>'failed',
                'message'=>'User Registration Failed'

            ]);


        }
        

    }

    function UserLogin(Request $request){
    }


        function SendOTPCode(Request $request){
            $email = $request->input('email');
            $otp=rand(1000,9999);
            $count=User::where('email', '=', $email)->count();
 
            if($count==1){
 
           
             Mail::to($email)->send(new OTPMail($otp));
             
             User::where('email', '=',$email)->update(['otp'=>$otp]);
             return response()->json([
                 'status'=>'success',
                 'message'=>'OTP Send Successfully'
             ]);
             
 
            }
            else{
             return response()->json([
                 'status'=>'failed',
                 'message'=>'User Not Found'
             ]);
 
 
            }
             
         }
        }
         



       


