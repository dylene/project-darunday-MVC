<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller


{public function store(Request $request)

    {
        $consultation = new consultation();
        $consultation->name = $request->input('name');
        $consultation->email = $request->input('email');
        $consultation->phone = $request->input('phone');
        $consultation->message = $request->input('message');
        $consultation->save();
        
        return redirect()->back()->with('success', 'consultation submitted successfully!');
    }
}