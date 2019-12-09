<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Validator;
use Auth;
use Session;

class AdminController extends Controller
{
    public function adminLoginForm()
    {
    	if(session("is_active")==1)
    	{
    		return redirect("/");
    	}
    	else
    	{
    		return view("admin.views.login_form");
    	}
    	
    }

    public function checkUserLogin(Request $request)
    {
    		$validator=Validator::make([
    			"email"=>$request->email,
    			"password"=>$request->password,
    		],[
    			"email"=>"required",
    			"password"=>"required"

    		]);
    		if($validator->fails())
    		{
    			return redirect("login")->withErrors($validator)->withInput();
    		}
    		else
    		{
    			$user_info=[
    				"email"=>$request->email,
    				"password"=>$request->password

    			];
    			if(auth()->guard("admin")->attempt($user_info))
    			{
    				$logged_user_details=auth()->guard("admin")->user();
    				session(["is_active"=>1]);
    				session(["user_details"=>$logged_user_details]);

    				return redirect("/");
    			}
    			else
    			{
    				$error_message="Invalid Credentials";
    				return redirect()->back()->withErrors($error_message);
    			}
    		}
    }

    public function logout()
    {
    	Session::flush();
    	Auth::guard("admin")->logout();
    	return redirect("/login");
    }
}
