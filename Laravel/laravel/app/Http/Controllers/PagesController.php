<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    Public function contacts()
    {
    	$header = 'Kontakty';
    	date_default_timezone_set('Europe/Warsaw');
    	$date = date('Y/m/d');
    	$time = date('H:i');
    	return view('pages.contacts' , compact('header' , 'date' , 'time'));
    }
    Public function about()
    {
    	return view('pages.about');
    }
}
