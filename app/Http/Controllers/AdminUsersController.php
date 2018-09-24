<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function index(){
    	$users = User::all();
    	return view('admin.users.index',compact('users'));
	}

	public function create(){
    	$roles = Role::pluck('name','id')->all();
    	return view('admin.users.create',compact('roles'));
	}

	public function store(Request $request){
		$this->validate($request, [
			'name' => 'required',
			'role_id' => 'required',
			'password' => 'required',
			'email' => 'required|string|email|max:255|unique:users',
		]);
    	$input = $request->all();
    	$input['password'] = bcrypt($request['password']);
    	User::create($input);
		$request->session()->flash('message.level', 'success');
		$request->session()->flash('message.content', 'New user created successfully!');
    	return redirect('admin/users');
	}

	public function edit($id){
    	$user = User::findOrFail($id);
		$roles = Role::pluck('name','id')->all();
		return view('admin/users/edit',compact('user','roles'));
	}

	public function update(Request $request, $id){
    	$user = User::findOrFail($id);
		if (trim($request['password'] == '')){
			$input = $request->except('password');
		} else{
			$input = $request->all();
			$input['password'] = bcrypt($request['password']);
		}
		$user->update($input);
		$request->session()->flash('message.level', 'success');
		$request->session()->flash('message.content', 'User info updated successfully!');
		return redirect('admin/users');
	}

	public function destroy(Request $request, $id){
    	$user = User::findOrFail($id);
    	$user->delete();
		$request->session()->flash('message.level', 'danger');
		$request->session()->flash('message.content', 'User deleted successfully!');
    	return redirect('admin/users');
	}
}
