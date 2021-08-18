<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public $name;


    public function index(){
        return view('welcome');
    }

    public function viewResume(){
        Session::put('name', $name);
        return redirect('resume');
    }
}
