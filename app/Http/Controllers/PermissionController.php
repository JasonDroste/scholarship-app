<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    //This method will show permissions page
    public function index(){
        return view('permissions.list');
    }

    // This method will show create permission page
    public function create(){
        return view('permissions.create');
    }

    // This method will insert a permission in the DB
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:permissions|min:3'
        ]);

        if($validator->passes()){
            Permission::create(['name' => $request->name]);

            return redirect()->route('permissions.index')->with('success', 'Permissions added successfully.');
        }else{
            return redirect()->route('permissions.create')->withInput()->withErrors($validator);
        }
    }

    //This method will show the edit permission page
    public function edit(){

    }

    // This method will update a permission
    public function update(){

    }

    // This method will delete a permission
    public function destroy(){

    }
}

