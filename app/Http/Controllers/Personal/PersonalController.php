<?php

namespace App\Http\Controllers\Personal;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PersonalController extends BaseController
{
    public function showpersonal(){
        return 'Personal Personal Personal Personal Personal Personal';
      }

      public function showconger(){
        return 'Conger Conger Conger Conger Conger Conger Conger ';
      }

      public function showmaladie(){
        return 'Maladie Maladie Maladie Maladie Maladie Maladie Maladie ';
      }
}


