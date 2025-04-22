<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function Showlogin()
    {
        return view('login');
    }


public function ShowRegister()
{
    return view('registration');
}

public function ShowDashboard()
{
    return view('User.dashboard');
}
public function ShowAdminDashboard()
{
    return view('Admin.ADashboard');
}



public function ResgistrationIndex(Request $request){

    $validator=Validator::make($request->all(),[
   
        'name'=>'required|string|max:255',
        'email'=>'required|email|unique:users',
        'password'=>'required',
      

    ]);

    if($validator->passes()){

        $user =new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();

    return redirect()->route('account.login')->with('success', 'User Created successfully');
    }

    else{
        return redirect()->route('account.register')
        ->withInput()
        ->withErrors($validator);
    }

}



public function LoginIndex(Request $request){

    $validator=Validator::make($request->all(),[
   
        'email'=>'required|email',
        'password'=>'required',
    ]);

    if($validator->passes()){

        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){

            $role = Auth::user()->role;

            if ($role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($role === 'user') {
                return redirect()->route('account.dashboard');
            }

        
        
    }
    else{
        return redirect()->route('account.login')->with('error', 'email or password wrong');
    }
}
  else{
    return redirect()->route('account.login')
    ->withInput()
    ->withErrors($validator);
  }
 
}

public function logout(){


     Auth::logout();
     session()->flush();
     session()->regenerate();
    return redirect()->route('account.login')->with('success', 'Logout successfully');

}


}
