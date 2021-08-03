<?php

namespace App\Http\Controllers\Offers;
use  App\Models\offer;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;



class OfferController extends BaseController
{
    public function getoffers(){
        return Offer::select('id','name','details','price','updated_at')->get();
    }

    public function store(Request  $Request){
        Offer::create([
                         'name'=>$Request->name,
                         'price'=>$Request->price,
                         'details'=>$Request->details,
                         
     ]);
     return 'saved successfully';
    }
   
    public function createoffer(){
        return view('offers.create');
    }
      
}


