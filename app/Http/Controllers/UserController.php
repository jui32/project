<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginform(){
        return view('admin.pages.login');

    }
    public function loginpost(Request $request){
        // dd($request->all());
        $validate=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
if($validate->fails()){
    return redirect()->back()->withErrors($validate);
}

$credential=$request->only('email','password');
// dd($credential);
$login=auth()->attempt($credential);
if($login){
    // dd('valid person');
    return redirect ()->route('dashboard');

}

// if(auth()->attempt($credential)){
//     return redirect ()->route('home');
// }

return redirect ()->back();
    }
public function logout(){
    auth()->logout();
    return redirect ()->route('admin.login');
}


public function profile(){
    return view('admin.pages.profile.profile');
}



 
    
}
