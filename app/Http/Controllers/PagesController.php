<?php

namespace App\Http\Controllers;

//HTTP requests: get, post, put, delete
Class PagesController extends Controller 
{
    public function getIndex()
    {
        //called in our routes.php
        return view('pages/welcome');
        //to create a variable that we can access in view, do view('pages/about')->with('fullname', $full) 
        //$full is a variable that you defined yourself. Now you can use this fullname variable in the views
        // or use it like this withFullname($full) same thing as above
        // or create an associative array and pass the values in there. 
        //make an empty array called data
        // $data = [];
        //now assign each index a name and a value $data['firstname'] = 'Rodny';
        // you tell views to use $fullname like this -- {{ $fullname }}
        
    }
    
    public function getAbout()
    {
        return view('pages/about');
    }
    
    public function getContact()
    {
        return view('pages/contact');
    }
    
}


?>