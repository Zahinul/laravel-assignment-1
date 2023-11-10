<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //function to display the simple message in a view
    function message(){
        $msg = "Welcome to the World of Laravel";
        
        //sending message to the view named greeting
        return view('greeting', ['msg' => $msg]);
    }
}
