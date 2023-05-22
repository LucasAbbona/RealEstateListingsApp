<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $lisings = Listing::take(2)->get();
        $brokers = User::all();
        return view('home',['listings'=>$lisings,'brokers'=>$brokers]);
    }
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
    public function list(){
        return view('list');
    }
    public function show(Listing $id){
        $profile = User::all()->where('id',$id->broker_id)->last();
        return view('singleListing',['listing'=>$id,'profile'=>$profile]);
    }
    public function contact(){
        return view('contact');
    }
    public function explore(){
        $listings = Listing::all();
        $brokers= User::all();
        return view('explore',['listings'=>$listings,'brokers'=>$brokers]);
    }
    public function manage(){
        $listingsOnSale = Listing::all()->where('broker_id',auth()->user()->id)->where('listingtype','Sell');
        $listingsOnRent = Listing::all()->where('broker_id',auth()->user()->id)->where('listingtype','Rent');
        return view('manage',['listings'=>$listingsOnSale,'listingsRent'=>$listingsOnRent]);
    }
    public function edit(Listing $id){
        return view('edit',['listing'=>$id]);
    }
    public function offers(Listing $id){
        return view('sendOffer',['listing'=>$id]);
    }
    public function search(Request $request){
        $resultados= Listing::where('location',$request->search)->get();
        return view('explore',['listings'=>$resultados]);
    } 
}
