<?php

namespace App\Http\Controllers\Salary;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class SalaryController extends BaseController
{
    public function getsalary(){
        return 'Get salary 20000$';
    }

    public function getIEP(){
        return 'Get IP 5000$';
    }

    public function getSB(){
        return 'Get SB 3000$';
    }
}
