<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use Hash;

class registercontroller extends Controller
{
    

    public function store(Request $request)
{
 $validator = Validator::make($request->all(), [
            'name' => 'required|max:20',  
	    'email' =>'required|email' ,
	    'password' =>'required|min:6' ,
	    'cpassword' =>'required|same:password' 
        ]);

 $message=array(
	'cpassword.required' =>'you must fill this first' ,
	'cpassword.min' =>'this is must be at least 6 charachters' ,
	'cpassword.same' =>'must be the same of password' );

  if ($validator->fails()) {
            return redirect('register')
                        ->withErrors($validator);               
        }
        else{

        	$user=new User();
        	$user->formstore($request);
        	 return redirect('login');
        }
}





public function login(Request $request)
{
    $validator = Validator::make($request->all(), [
        'emailtext' =>'required|email' ,
        'passwordtext' =>'required|min:6' ,        
        ]);
     if ($validator->fails()) {
            return redirect()->intended('login')
                        ->withErrors($validator);               
        }
        else {
$testemail=$request->input('emailtext');
$testpassword=$request->input('passwordtext');
 
      if(Auth::attempt(['email'=>$testemail ,'password'=>$testpassword]))
          { return redirect()->intended('mainPage'); }
       else
           { return redirect()->intended('login'); }
     }  
}

}
