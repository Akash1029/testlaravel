<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\DataNotif;


class UserNotificationController extends Controller
{
    public function show()
    {
    	$notifications = auth()->user()->unreadNotifications;

    	return view('notification.show', [
    		'notifications' => $notifications
    	]);
    }
}
