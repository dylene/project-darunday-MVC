<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller {

    public function index(){
        return view('consultation');
    }

    public function store(Request $request)

    {
        //need to transfer this to model
        $consultation = new consultation();
        $consultation->name = $request->input('name');
        $consultation->email = $request->input('email');
        $consultation->phone = $request->input('phone');
        $consultation->message = $request->input('message');
        $consultation->save();
        
        return redirect()->back()->with('success', 'consultation submitted successfully!');
    }
}