<?php

namespace App\Http\Controllers;
 
use App\Product;
use Auth;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
		return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function add()
    {
        $rules = array(
        'name'             => 'required',                        
        'email'            => 'required|email',     
        'password'         => 'required',
        'password_confirmation' => 'required|same:password'           
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {

            $messages = $validator->messages();
            return Redirect::to('admin/user/create')->withErrors($validator);
        } else {
            $user = new User;
            $user->name =Request::input('name');
            $user->email =Request::input('email');
            $user->password =Hash::make(Request::input('password'));
            $user->save();
            return redirect('/admin/user/list');
        }
    }

  
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit')->withUser($user);
    }

    public function update(Request $request, $id)
    {
        $rules = array(
        'name'             => 'required',                        
        'email'            => 'required|email',     
        'password'         => 'required',
        'password_confirmation' => 'required|same:password'           
        );

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            $messages = $validator->messages();
            return Redirect::to('admin/user/edit/'.$id)->withErrors($validator);
        } else {
            $user = User::findOrFail($id);
            $user->name =Request::input('name');
            $user->email =Request::input('email');
            $user->password =Hash::make(Request::input('password'));
            $user->save();
            return redirect('/admin/user/list');
        }
    }

    public function destroy($id)
	{
		User::destroy($id);
        return redirect('/admin/user/list');
	}
}
