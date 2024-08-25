<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class CaringalController extends Controller
{
    /**
     * Show the index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('caringal.index');
    }

    /**
     * Handle the form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submitMessage(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'email' => 'required|email',
            'contact-message' => 'required|string',
        ]);
    
        // Create a new message
        Message::create([
            'email' => $request->input('email'),
            'message' => $request->input('contact-message'),
        ]);
    
        // Redirect back to the /caringal route with a success message, including the fragment identifier
        return redirect()->route('caringal', ['#contact'])->with('success', 'Message sent successfully!');
    }
    

}
