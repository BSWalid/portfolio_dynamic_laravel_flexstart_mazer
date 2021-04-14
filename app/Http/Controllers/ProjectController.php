<?php

namespace App\Http\Controllers;

use App\Models\Project;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
        public function index(){
            $projects = Auth::user()->projects;

            return view('admin.projects.all_projects',['projects'=>$projects]);
        }

        public function create(){


            return view('admin.projects.create-project');
        }



        public function edit(Project $project){

            $this->authorize('view', $project);
            return view('admin.projects.edit-project',['project'=>$project]);
        }


        public function update(Project $project ){

            $inputs = request()->validate([
                'title'=>'required',
                'small_description'=>'required',
                'long_description'=>'required',
                'type'=>'required',
                'contribution'=>'required',
                'project_image_url'=>'mimes:jpeg,jpg,png,gif|max:10000',
                'github_link'=> 'required',
                'page_link'=> 'required',


            ]);




        $this->authorize('update', $project);

        $project->update($inputs);
        request()->session()->flash('Project updated', 'project with title '.$project->title.' has been updated ');


        return  redirect(route('projects.index'));

        }



        public function destroy(Project $project){

            $project->delete();
            request()->session()->flash('Project deleted', 'project with title '.$project->title.' has been deleted ');
             return back();
        }




        public function store(){

            $inputs = request()->validate([
                'title'=>'required',
                'small_description'=>'required',
                'long_description'=>'required',
                'type'=>'required',
                'contribution'=>'required',
                'project_image_url'=>'mimes:jpeg,jpg,png,gif|required|max:10000',
                'github_link'=> 'required',
                'page_link'=> 'required',


            ]);





            Auth::user()->projects()->create($inputs);
            request()->session()->flash('project created', 'project created');


            return redirect(route('projects.index'));



        }
}
