<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}
	
    public function home() {
    	$user = \Auth::user();
		//if (Auth::check()) 
		//if user==null {}
		return view('account.home', compact(['user']));
	}
}
