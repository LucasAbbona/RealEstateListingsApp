<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function offers(){
        $applications = Application::all()->where('broker_id',auth()->user()->id);
        return view('myOffers',['applications'=>$applications]);
    }
    public function sendOffer(Request $request){
        $applInfo = $request->validate([
            'broker_id'=>'required',
            'listing_id'=>'required',
            'conditions'=>'required',
            'offer'=>'required|numeric',
            'policies'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|email'
        ]);
        if($applInfo['policies'] == 'on'){
            Application::create($applInfo);
        }
        return redirect('/explore');
    }
}
