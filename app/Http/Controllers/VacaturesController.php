<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacaturesController extends Controller
{
    public function index(){
    	return view('pages.vacatures');
    }
}
