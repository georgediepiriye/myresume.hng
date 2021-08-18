<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public $name;

    public function index(){
        return view('welcome');
    }

    public function viewResume(Request $request){
       $name =  $request->name;
        session()->put('name', $name);
        return redirect('resume');
    }

    public function showResume(){
        return view('resume');
    }
}
