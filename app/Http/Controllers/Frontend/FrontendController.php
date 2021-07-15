<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class FrontendController extends BaseController
{
    public function __construct(){
        $this->middleware('auth')->except('showfrontend2');
    }

    public function showfrontend(){
     return  view('admin-form\admin-form');
      }
    public function showfrontend2(){
        return  'show frontend 2';
         }

    public function showfrontend3(){
            return  'show frontend 3';
             }
       

      
}