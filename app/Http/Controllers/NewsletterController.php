<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //
    public function newsletterForm(){
        return view('newsletters.newsletter');

    }

    //store
    public function storeEmail(Request $request){

        $formFields = $request->validate([
            'email' => ['required', 'email']
          
        ]);
    }
}
