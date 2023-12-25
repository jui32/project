<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function print()
    {
        $users=User::all();
    // dd($users);
    return view('admin.pages.users.print',compact('users'));
    }
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

$login=auth()->attempt($credential);
if($login){
    // dd('valid person');
    return redirect ()->route('dashboard');

}



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


public function store(Request $request)
{
    // dd($request->all());
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

    $user_image=null;
    if($request->hasFile('image'))
    {
        $user_image=date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/uploads',$user_image);

    }
    // dd($user_image);
 
   
    User::create([
        'name'=>$request->user_name,
        'role'=>$request->role,
        'image'=>$user_image,
        'email'=>$request->user_email,
        'password'=>bcrypt($request->user_password),
    ]);

    return redirect()->back()->with('message','User created successfully.');


}


public function edit($id)
{
  $users=User::find($id);

  return view('admin.pages.users.edit',compact('users'));
 
}

public function update(Request $request,$id)
{
    $users=User::find($id);

    if($users)
    {

     
    $user_image=null;
    if($request->hasFile('image'))
    {
        $user_image=date('Ymdhis').'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/uploads',$user_image);

    }

      }

      $users->update([
        'name'=>$request->user_name,
        'image'=>$user_image,
       
    
    ]);
    return redirect()->back();
    }
    
}





 

