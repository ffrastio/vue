<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request){
        return view('pages.dashboard');
    }
}
