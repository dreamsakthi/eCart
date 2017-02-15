<?php

namespace App\Http\Controllers;
 
use App\Product;
use Auth;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

use Illuminate\Support\Facades\Hash;
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
        $user = new User;
        $user->name =Request::input('name');
        $user->email =Request::input('email');
        $user->password =Hash::make(Request::input('password'));
        $user->save();
        return redirect('/admin/user/list');
    }

  
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit')->withUser($user);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name =Request::input('name');
        $user->email =Request::input('email');
        $user->password =Hash::make(Request::input('password'));
        $user->save();
        return redirect('/admin/user/list');
    }

    public function destroy($id)
	{
		User::destroy($id);
        return redirect('/admin/user/list');
	}
}
