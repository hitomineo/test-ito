<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class TestsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'gender'=> 'required',
            'email'=> 'required|email',
            'postcode'=> 'required|max:8',
            'address' => 'required',
            'opinion'=> 'required',
        ]);


        $inputs = $request->all();
        return view('contacts.confirm', ['inputs' => $inputs]);
    }


    


    public function complete()
    {
        return view('contacts.complete');
    }
}
