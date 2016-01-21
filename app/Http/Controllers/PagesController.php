<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function about()
    {
    	$name = 'blah';
    	return view('pages.about', [
    		'first' => 'blah', 
    		'last' => 'blow'
    	]);
    }

    public function contact()
    {
    	return view('pages.contact');
    }
}
