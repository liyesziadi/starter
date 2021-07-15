<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function showlanding(){
        $data=[];
        $data['id']=27;
        $data['name']=' azert tyuio qsdf ghjkl';
        return view('landing/landing',$data);
    }

    public function showabout(){
        return view('about/about');
    }

}
