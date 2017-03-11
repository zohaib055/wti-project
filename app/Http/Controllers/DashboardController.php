<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class DashboardController extends Controller
{
    //

    public function __construct(){

    	 $this->middleware('auth');
    }

    public function index(){


    	$total_members = \App\User::count();


    	return view("dashboard.index",compact("total_members"));
    }
}
