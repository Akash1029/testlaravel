<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{

    public function home()
    {

    	return \View::make('welcome');
    }
}
