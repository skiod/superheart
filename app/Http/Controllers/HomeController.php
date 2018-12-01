<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Donor;
use Auth;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function  aboutUs(){
        return view('about-us');
    }

    public function events(){
        return view('event-single');
    }

    public function campaigns(){
        return view('campaigns');
    }

    public function contact(){
        return view('contact');
    }

    public function userLogin(){
        return view('user-login');
    }

    public function getCountry($name){
        
    }


    public function search(Request $request){

        $type = $request['data']['type'];
        $city = $request['data']['city'];
        $country = $request['data']['country'];
        
        $donor = Donor::where('bloodtype','LIKE','%'.$type.'%')
                        ->where('city','LIKE','%'.$city.'%')
                        ->where('country','LIKE','%'.$country.'%')
                ->get();
        return($donor);

    }

}

