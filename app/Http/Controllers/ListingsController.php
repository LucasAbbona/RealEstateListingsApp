<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function create(Request $request){
        $listingInfo= $request->validate([
            'title'=>'required',
            'location'=>'required',
            'size'=>'required',
            'rooms'=>'required',
            'information'=>'required',
            'features'=>'required',
            'photo1'=>'required',
            'broker_id'=>'required',
            'price'=>'required',
            'listingtype'=>'required'
        ]);
        if($request->hasFile('photo1')){
            $listingInfo['photo1'] = $request->file('photo1')->store('properties','public');
        }
        if($request->hasFile('photo2')){
            $listingInfo['photo2']= $request->file('photo2')->store('properties','public');
        }
        if($request->hasFile('photo3')){
            $listingInfo['photo3']= $request->file('photo3')->store('properties','public');
        }
        if($request->hasFile('photo4')){
            $listingInfo['photo4']= $request->file('photo4')->store('properties','public');
        }
        if($request->hasFile('photo5')){
            $listingInfo['photo5']= $request->file('photo5')->store('properties','public');
        }
        Listing::create($listingInfo);
        return redirect('/');
    }
    public function edit(Request $request, Listing $id){
        $update= $request->validate([
            'title'=>'required',
            'location'=>'required',
            'size'=>'required',
            'rooms'=>'required',
            'listingtype'=>'required',
            'price'=>'required',
            'features'=>'required',
            'information'=>'required',
            'broker_id'=>'required'
        ]);
        if($request->hasFile('photo1')){
            $update['photo1']= $request->file('photo1')->store('properties','public');
        }
        if($request->hasFile('photo2')){
            $update['photo2']= $request->file('photo2')->store('properties','public');
        }
        if($request->hasFile('photo3')){
            $update['photo3']= $request->file('photo3')->store('properties','public');
        }
        if($request->hasFile('photo4')){
            $update['photo4']= $request->file('photo4')->store('properties','public');
        }
        if($request->hasFile('photo5')){
            $update['photo5']= $request->file('photo5')->store('properties','public');
        }
        $id->update($update);
        return redirect('/manage');
    }
    public function destroy(Listing $id){
        if($id->broker_id == auth()->user()->id){
            $id->delete();
        }
        return redirect('/manage');
    }
}
