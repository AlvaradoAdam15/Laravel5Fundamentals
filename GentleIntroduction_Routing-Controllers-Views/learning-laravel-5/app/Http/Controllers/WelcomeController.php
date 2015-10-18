<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }


    public function index()
    {
        return 'Hello World';
    }

    public function contact()
    {
        return 'Contact me';
    }
}