<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function login(Request $request){
        $inputs = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($inputs)) {
            $request->session()->regenerate();

            if (auth()->user()->role == "Admin"){
                return redirect('/admin-dashboard');
            }elseif (auth()->user()->role == "User"){
                return redirect('/user-dashboard');
            }

        }else{
            return redirect('/')->withErrors(['error' => 'Sorry! Unable to find your account']);
        }

    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }

    public function create_account(Request $request){

        if ($request->password == $request->c_password){
            User::create([
                'complete_name' => $request->complete_name,
                'sex' => $request->sex,
                'address' => $request->address,
                'phone' => $request->phone,
                'status' => 'Pending',
                'role' => 'User',
                'email' => $request->email,
                'username' => $request->username,
                'password' => $request->password,
            ]);
            Alert::success('Register Complete, Please wait for 1 to 2 hours for admin to approve your account');
            return redirect('/');

        }else{
            return redirect('/create-account')->withErrors(['error' => 'Password do not match, please try again']);
        }

    }
}
