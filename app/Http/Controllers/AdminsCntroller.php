<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsCntroller extends Controller
{
    //
    public function index(){

        return view('admin.dashboard-index');
    }
}
