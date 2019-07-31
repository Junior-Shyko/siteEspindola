<?php

namespace SiteEspindola\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public function index()
    {
    	return view('site.calculations');
    }
}
