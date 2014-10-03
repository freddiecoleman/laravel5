<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class HomeController extends Controller {

    public function index(\MyClass $myClass)
    {
		return view('hello');
	}

}
