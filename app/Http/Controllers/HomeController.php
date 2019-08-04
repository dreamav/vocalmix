<?php

namespace App\Http\Controllers;

use Auth;
use Gate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		if(Gate::denies('view-admin')){
			$data = ['message'=>Auth::user()->name.' у вас нет доступа к этому разделу'];
		}else{
			$data = [];
		}

        return view('dashboard.index', $data);
    }
}
