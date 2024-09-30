<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/get-user', function(){
    $users = User::where('role', '!=', 'Admin')->get();
    return $users;
});

Route::get('/', function () {

    if (Auth::check()){
        if (auth()->user()->role = "Admin"){
            return view('Admin.dashboard');
        }elseif(auth()->user()->role = "User"){
            return view('Users.dashboard');
        }
    }else{
        return view('login');
    }


});

Route::get('/create-account', function(){
    return view('create_account');
});

Route::get('/admin-dashboard', function(){
    if (auth::check() && auth()->user()->role = "Admin"){
        return view('Admin.dashboard');
    }
});

Route::get('/admin-users', function(){
    if (auth::check() && auth()->user()->role = "Admin"){
        return view('Admin.users');
    }
});

Route::get('/user-dashboard', function(){
    if (auth::check() && auth()->user()->role = "User"){
        return view('Users.dashboard');
    }
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'create_account']);
Route::post('/logout', [Usercontroller::class, 'logout']);
