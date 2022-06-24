<?php

namespace App\Http\Controllers;
use App\Progress;
use App\Contact;
use Illuminate\Http\Request;
use Hash;
use Auth;

class ProgressUserController extends Controller
{
    public function index()
    {
        $progresses = Progress::all();
        return view ('userPage.index-user')->with('progresses', $progresses);
    }


    public function change_password(){
        return view('userPage.change_password');

    }

    public function update_password(Request $request){
        $request->validate([
            'old_password'=>'required|min:6|max:100',
            'new_password'=>'required|min:6|max:100',
            'confirm_password'=>'required|same:new_password'

        ]);

        $current_user=auth()->user();
        if(Hash::check($request->old_password,$current_user->password)){
            $current_user->update([
                'password'=>bcrypt($request->new_password)
            ]);
            return redirect()->back()->with('success' , 'you chanded your password!');

        }else{
            return redirect()->back()->with('error' , 'Old password dose not matched');
        }


    }
}
