<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

use Hash;


class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    //  Reset Password 


    public function showPasswordResetForm(){

        return view("user.password",compact("token"));

    }
    public function resetPassword(Request $request){

    	$user = Auth::user(); // get current user

    	$flags = false;
     
     if(!empty($request->new_password)){

    	if (Hash::check($request->current_password, $user->password)){

            $update_user = \App\User::where('id', $user->id)->update(["password"=> bcrypt($request->new_password)]);

    		$request->session()->flash('msg', 'Password changed successfully');
            $request->session()->flash('type', 'success');
            return redirect()->route('plots.index');
		}else{

			 $request->session()->flash('msg', 'Password Do not match');
             
             $request->session()->flash('type', 'danger');

			 return  redirect()->route("change-password");
		}

     }else{


         $request->session()->flash('msg', 'Something went wrong please try again!');
             
         $request->session()->flash('type', 'danger');

         return  redirect()->route("change-password");

     }
    
    	
    }
}
