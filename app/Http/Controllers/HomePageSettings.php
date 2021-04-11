<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HomePageSettings extends Controller
{




    public function index(){


        return view('admin.home_page_settings.home-page-settings-index');
    }
    public function changeSetting(Request $request){

        $inputs = $request->validate([
            'Hero_section_title'=> 'required',
            'Hero_section_description'=>'required',

        ]);

        Config::set('constants.home.Hero_section_title', $inputs['Hero_section_title']);
        return redirect()->route('home_page_settings');





    }
}
