<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    
    public $email;
    public $text;

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

    public function sendMessage(Request $request){
        $request->validate([
              'email'=> 'required|email',
              'text'=>'required'
        ]);
        $email = $request->email;
        $text = $request->text;
        $message = new Message();
        $message->email = $email;
        $message->message = $text;
        $message->save();
        session()->flash('message','Message sent successfully');
         return redirect('resume');
     }
}
