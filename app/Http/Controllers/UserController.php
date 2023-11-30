<?php

namespace App\Http\Controllers;

use App\Models\User;
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


public function list(){

    $users=User::all();
    // dd($users);
    return view('admin.pages.users.list',compact('users'));
}

public function createForm()
{
    return view('admin.pages.users.create');
}

// Example in User.php model
// public function isAdmin()
// {
//     return $this->role=== 'admin'; // Adjust the condition based on your user roles setup
// }

public function store(Request $request)
{
    $validate=Validator::make($request->all(),[
        'user_name'=>'required',
        'role'=>'required',
        'user_email'=>'required|email',
        'user_password'=>'required|min:6',
    ]);

    if($validate->fails())
    {
        return redirect()->back()->with('myError',$validate->getMessageBag());
    }

    $fileName=null;
    if($request->hasFile('user_image'))
    {
        $file=$request->file('user_image');
        $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();
       
        $file->storeAs('/uploads',$fileName);

    }

   
    User::create([
        'name'=>$request->user_name,
        'role'=>$request->role,
        'image'=>$fileName,
        'email'=>$request->user_email,
        'password'=>bcrypt($request->user_password),
    ]);

    return redirect()->back()->with('message','User created successfully.');


}


 
    
}
