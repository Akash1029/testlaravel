<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
    	return \View::make('contact');
    }

    public function store()
    {	
    	request()->validate(['email' => 'required|email']);

    	// Mail::raw('Yooooooo!', function ($message) {

    	//     $message->to(request ('email'));
    	
    	//     $message->subject('Hello Human');
    	// });

    	Mail::to(request('email'))
    	->send(new Contact('Anime'));

    	return redirect('/contact')
    	->with('message', 'Email sent!') ;
    }
}
