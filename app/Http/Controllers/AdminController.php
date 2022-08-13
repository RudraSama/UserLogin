<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(){
        if (auth()->guest()){
            abort(403);
        }
        else{
            return view('pages.dashboard', [
                'users' => User::latest()->get()
            ]);
        }
    }
    public function edit(User $user){
        return view('pages.edit', [
            'user' => $user
        ]);
    }
    public function update(User $user){
        $attribtues = \request()->validate([
            'name' => 'required',
            'email' => 'required',
            'location' => 'required',
            'phone' => 'required',
        ]);
        $attribtues['isAdmin'] = (\request()->get('isAdmin') == 'on')?true:false;

        if($user->update($attribtues)){
            return redirect()->back()->withErrors(['msg' => 'Updated']);
        }else{
            return redirect()->back()->withErrors(['msg' => 'Failed Update']);
        }
    }
    public function delete(User $user){
        if ($user->delete()){
            return redirect()->back();
        }
    }
}
