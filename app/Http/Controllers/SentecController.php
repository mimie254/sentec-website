<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SentecController extends Controller
{
    public function index()
    {
        return view ('about');
    }
    public function show()
    {
        return view ('led');
    }
    public function create()
    {
        return view ('inverter');
    }
    public function display()
    {
        return view ('heater');
    }
    public function make()
    {
        return view ('solar');
    }
    public function take()
    {
        return view ('contact');
    }
    public function pick()
    {
        return view ('project');
    }
    public function give()
    {
        return view ('company');
    }
    public function team()
    {
        return view ('team');
    }
}
