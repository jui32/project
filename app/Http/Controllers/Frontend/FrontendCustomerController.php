<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class FrontendCustomerController extends Controller
{
    public function register(){
        return view('frontend.front_pages.registration');
    }
    
   public function doRegister(Request $request){
    Customer::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
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

            return redirect()->route('customer.profile');

            if($validate->fails())
            {
                //notify()->error($val->getMessageBag());
                return redirect()->back();
            }
    
            $credentials=$request->except('_token');
            // dd($credentials);
    
            if(auth()->attempt($credentials))
            {
                //notify()->success('Login Success.');
                return redirect()->route('home');
            }
    
            //notify()->error('Invalid Credentials.');
                return redirect()->back();
    
    
        }

    public function logout()
    {
        auth()->logout();
        notify()->success('Logout Success.');    
        return redirect()->route('home');
    }

    public function showProfile(){
        return view('frontend.front_pages.profile');
    }
        }
    

           

        
    
   
      
