<?php

namespace App\Http\Livewire;

use App\Models\Listing;
use App\Models\User;
use Livewire\Component;

class ShowResults extends Component
{
    public $search;
    public $type='';
    public $price='';
    protected $queryString = ['search'];
    
    public function render()
    {
        if($this->type == '' && $this->price == ''){
            $listings = Listing::where('location', 'like', '%'.$this->search.'%')->orWhere('title', 'like', '%'.$this->search.'%')->get();
        }else if($this->type != ''){
            $listings= Listing::when($this->type,function ($query, $tipo){
                return $query->where('listingtype', $tipo);
            })->get();
        }else if($this->price == '500'){
            $listings= Listing::where('price','>=',500000)->get();
        }else if($this->price == '0-100'){
            $listings= Listing::whereBetween('price',[0,100000])->get();            
        }else if($this->price == '100-500'){
            $listings= Listing::whereBetween('price',[100000,500000])->get();            
        }
        return view('livewire.show-results', [
            'listings' => $listings,'brokers'=>User::all()
        ]);
    }
}
