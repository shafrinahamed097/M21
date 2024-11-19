<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;

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
      $count = User::where('email', '=', $request->input('email'))
               ->where('password', '=', $request->input('password'))->count();

               if($count==1){
                // User Login ->JWT Token Issue
                $token = JWTToken::CreateToken($request->input('email'));
                return response()->json([
                    'status'=> "Login Success",
                    'message'=> 'User Login Successful',
                    'token'=> $token
                ]);

               }else{
                return response()->json([
                    'status'=>'User Verified Failed',
                    'message'=>'unauthorized'

                ]);

               }
            }
        }



       


