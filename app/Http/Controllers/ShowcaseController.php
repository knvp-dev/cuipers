<?php

namespace App\Http\Controllers;
use App\Album;
use App\Photo;
use Illuminate\Http\Request;

class ShowcaseController extends Controller
{
    public function index($category){
    	$albums = Album::whereCategory($category)->with('photo')->get();
    	return view('pages.showcase.index', compact('albums'));
    }

    public function show($category, $album_id){
    	$album = Album::whereId($album_id)->first();
    	$photos = Photo::whereAlbumId($album_id)->get();
    	return view('pages.showcase.detail', compact('album','photos'));
    }
}
