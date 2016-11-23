<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowcaseController extends Controller
{
    public function index($id){
    	return view('pages.showcase.index');
    }

    public function show($id){
    	return view('pages.showcase.detail');
    }
}
