<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
//use Illuminate\Routing\Controllers\HasMiddleware;
//use Illuminate\Routing\Controllers\Middleware;

class ApplicationController extends Controller  //implements HasMiddleware
{
    public $step = 1;
    /*
    public static function middleware(): array
    {
        return[
            new Middleware('permission:view users', only: ['index']),
            new Middleware('permission:edit users', only: ['edit']),
            new Middleware('permission:create users', only: ['create']),
            new Middleware('permission:delete users', only: ['destory']),
        ];

    }  
    */

    public function index(){
        return view('applications.create');
        /*$applications = Application::latest()->paginate(10);
        return view('applications.list', [
            'applications' => $applications
        ]);*/
    }

    public function create(){
        return view('applications.create');
        /*$users = User::orderBy('last_name', 'DESC')->get();
        return view('applications.create', [
            'users' => $users
        ]);*/
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'dob' => 'required|date',
            'phone' => 'required', 
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'graduate_status' => 'required',
            'high_school' => 'required',
            'post_secondary' => 'required',
            'study_focus' => 'required',
            'first_gen' => 'required',
            'member_status' => 'required',
            'previous_scholarship' => 'required',
            'gpa' => 'required', 
        ]);

        if($validator->fails()){
            return redirect()->route('applications.create')->withInput()->withErrors($validator);
        }

        $application = new Application();
        $applciation->name = $request->name;
        $application->email = $request->email;
        $application->dob = $request->dob;
        $application->phone = $request->phone;
        $application->address = $request->address;
        $applciation->city = $request->city;
        $application->state = $request->state;
        $application->zip = $request->zip;
        $application->graduate_status = $request->graduate_status;
        $application->high_school = $request->high_school;
        $application->post_secondary = $request->post_scondary;
        $application->study_focus = $request->study_focus;
        $application->first_gen = $request->first_gen;
        $application->member_status = $request->member_status;
        $application->previous_scholarship = $request->previous_scholarship;
        $application->gpa = $request->gpa;
        $application->save();

        $application->syncUsers($request->user);

        return redirect()->route('applications.index')->with('success', 'User added successfully.');
    }

    public function edit($id)
    {
        $application = Application::findOrFail($id);
        $hasUser = $application->users->pluck('name');
        $users = User::orderBy('name','ACS')->get();

        return view('applications.edit', [
            'users' => $users,
            'hasUser' => $hasUsers,
            'application' => $applications
        ]);
    }

    public function nextStep()
    {
    
        switch ($this->step){
            case '1':
                $this->validate([
                    'name' => 'required|min:3',
                    'email' => 'required|email|unique:users,email',
                    'dob' => 'required',
                    'phone' => 'required',
                ]);
                break;
            case '2':
                $this->validate([
                    'address' => 'required',
                    'city' => 'required',
                    'state' => 'required',
                    'zip' => 'required',
                ]);
                break;
            case '3':
                $this->validate([
                    'graduate_status' => 'required',
                    'high_school' => 'required',
                    'post_secondary' => 'required',
                    'study_focus' => 'required',
                    'first_gen' => 'required',
                    'member_status' => 'required',
                    'previous_scholarship' => 'required',
                    'gpa' => 'required',
                ]);
                break;
            case '4':
                $this->validate([
                    'essay' => 'required',
                    'short_answer' => 'required'
                ]);
                break;
            default:
                break;

        }
        $this->step++;
    }

    public function previousStep()
    {
        $this->step--;
    }


}
