<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Laravel\Passport\HasApiTokens;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    

    
    public function home() {
        return view('home');
    }
    public function additem() {
        return view('additem');
    }
    public function addlist() {
        return view('addlist');
    }
    public function edititem() {
        return view('edititem');
    }
    public function welcome() {
        return view('welcome');
    }
    
}
