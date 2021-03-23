<?php

namespace App\Http\Controllers;


use App\Events\PurchaseProcessed;
use App\Notifications\PaymentReceived;

class PaymentsController extends Controller
{
    public function create()
    {
    	return view('email.payment');
    }

    public function store()
    {	
    	request()->user()->notify(new PaymentReceived(900));
    	// Notification::send(request()->user(),new PaymentReceived());
    	return redirect('/');
        // PurchaseProcessed::dispatch('toy');
        // event(new PurchaseProcessed('toy'));
    }
}
