<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
        public function index(){
            $projects = Auth::user()->projects;

            return view('admin.projects.all_projects',['projects'=>$projects]);
        }
}
