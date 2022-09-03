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
    public function health()
    {
        return view ('health_details');
    }
    public function home()
    {
        return view ('home_details');
    }
    public function public()
    {
        return view ('public_details');
    }
    public function commercial()
    {
        return view ('commercial_details');
    }
    public function education()
    {
        return view ('education_details');
    }
    
}