<?php

namespace App\Http\Controllers;

use App\Conversation;
use Illuminate\Http\Request;

class ConversationController extends Controller
{
    public function index()
    {
    	return view('conversations.index', [
    		'conversations' => conversation::all()
    	]);
    }

    public function show()
    {
    	return view('conversations.show', [
    		'conversation' => $conversation
    	]);
    }
}
