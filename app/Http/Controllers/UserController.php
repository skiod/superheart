<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Donor;
use Hash;
class UserController extends Controller
{
    

    public function dashboard(){
        return 'dashboard';
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('user-login');
    }


    public function signup(Request $request){

        $name =  $request['name'];
        $phone = $request['phone'];
        $email = $request['email'];
        $password = $request['password'];
        $country = $request['country'];
        $city = $request['city'];
        $donor_type = $request['type'];
        $donor = new Donor();
        $donor->name = $name;
        $donor->email = $email;
        $donor->phone = $phone;
        $donor->city = $city;
        $donor->country = $country;
        $donor->bloodtype = $donor_type;
        $password = Hash::make($password);
        $donor->password = $password;
        $donor->save();
        $request->session()->flash('alert-success', 'Another Super man added into our planet ! ');
        return redirect()->route("user-login");

        // Auth::login($donor);
    }

    public function loginUser(Request $request){

        $email =  $request['email'];
        $password = $request['password'];
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return  redirect()->route('dashboard');
        }else{
            return 'no';
        }

    }
}
