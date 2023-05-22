<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){
       $UserInfo = $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email|email',
            'password'=>'required|min:6|max:16|confirmed'
        ]);
        $UserInfo['password']=bcrypt($UserInfo['password']);
        User::create($UserInfo);
        return redirect('/login');
    }
    public function login(Request $request){
        $UserInfo = $request->validate([
             'email'=>'required|email',
             'password'=>'required'
         ]);
         if(auth()->attempt($UserInfo)){
            $request->session()->regenerate();
            return redirect()->route('main');
        }
         return back();
     }
     public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('main');
     }
     public function profile(){
        $myInfo = auth()->user();
        return view('profile',['profile'=>$myInfo]);
     }
     public function update(Request $request, User $id){
        $updtInfo = $request->validate([
            'linkedin' => 'required',
            'phone'=>'required|numeric',
            'experience' => 'required|numeric',
            'sales'=>'required|numeric',
            'profile_photo'=>'required'
        ]);
        if($request->hasFile('profile_photo')){
            $updtInfo['profile_photo'] = $request->file('profile_photo')->store('profile','public');
        }
        $id->update($updtInfo);
        return redirect()->back();
     }
}
