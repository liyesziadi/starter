<?php

namespace App\Http\Controllers\Admin;
use  App\Models\offer;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



class AdminController extends BaseController
{
    public function showformadmin(){
        $data=[];
        $data['id']=27;
        $data['name']='liyes ziadi';

        $obj=new \stdClass();
        $obj->name='liyes ziadi';
        $obj->id=1;
        $obj->age=40;
     return view('admin-form\admin-form',compact('obj'));
     //return view('admin-form\admin-form',$data);//->with(['data'=>'My Data','id'=>77]);
      }

      
}


