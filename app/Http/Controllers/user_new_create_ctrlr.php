<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_new_create;

class user_new_create_ctrlr extends Controller
{
    public function index(){
        $users = user_new_create::all();
        return view('users.index', ['users' => $users]);
    }

    public function create(){
        return view('users.create');
    }

    public function add(Request $request){
        $data = $request->validate([
            'fstNme' => 'required',
            'lstNme' => 'required',
            'phn' => 'required',
        ]);

        user_new_create::create($data);

        return redirect(route('newUsr.index'));
    }

    public function edit(user_new_create $user){
        return view('users.edit', ['user' => $user]);
    }

    public function update(user_new_create $user, Request $request){
        $data = $request->validate([
            'fstNme' => 'required',
            'lstNme' => 'required',
            'phn' => 'required',
        ]);

        $user->update($data);

        return redirect(route('newUsr.index'));
    }

    public function delete(user_new_create $user){
        $user->delete();
        return redirect(route('newUsr.index'));
    }
}
