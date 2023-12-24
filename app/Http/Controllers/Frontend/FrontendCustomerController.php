<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\order;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FrontendCustomerController extends Controller
{
    public function register(){
        return view('frontend.front_pages.registration');
    }

    public function userprofile()
    {
        // dd(auth('customer')->user()->id);
        $id = auth('customer')->user()->id;
        $pending = order::where('user_id', $id)->where('status', '=', 'pending')->count();
        $confirm = order::where('user_id', $id)->where('status', '=', 'confirm')->count();
        // dd($pending);
        $list = order::where('user_id', $id)->get();
        // dd($list);
        return view('frontend.front_pages.profile', compact('pending', 'confirm', 'list'));
    }
    
   public function doRegister(Request $request){
    // dd($request->all());

    $imageName = null;
    if($request->hasFile('image')){
        $image=$request->file('image');
        $imageName=date('Ymdhis').'.'.$image->getClientOriginalExtension();
        $image->storeAs('/Customer',$imageName);
    }


    Customer::create([
        'name'=>$request->name,
        'image'=> $imageName,
        'birth_date'=>$request->birth_date,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'address'=>$request->address,
        'city'=>$request->city,
        'state'=>$request->state,
        'zip'=>$request->zip,
        'number'=>$request->number,
        'role'=>'customer',
    ]);
    notify()->success('Customer Registration successful.');
    return redirect()->back();

  }
        public function login()
        {
            return view('frontend.front_pages.login');
        }
        public function doLogin(Request $request)
        {
            $validate=Validator::Make($request->all(),[
            'email'=>'required',
            'password'=>'required']);

            // return redirect()->route('customer.profile');

            if($validate->fails())
        {
            notify()->error($validate->getMessageBag());
            return redirect()->back();
        }

    
            $credentials=$request->except('_token');
            // dd($credentials);
    
            if(auth()->guard('customer')->attempt($credentials))
            {
               
                notify()->success('Login Success.');
                return redirect()->route('home');
            }
           
    
            notify()->error('Invalid Credentials.');
                return redirect()->back();
    
    
        }

    public function logout()
    {
        auth('customer')->logout();
        notify()->success('Logout Success.');  
        session()->forget('vcart');  
        return redirect()->route('home');
    }

    public function showProfile(){
        return view('frontend.front_pages.profile');
    }
        }
    

           

        
    
   
      
