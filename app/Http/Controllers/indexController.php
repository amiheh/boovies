<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use DB; 

class indexController extends Controller
{
    //
    function list() {
    	$data = Http::get('https://api.themoviedb.org/3/discover/movie?api_key=1b869b3ccf57d089047ded4b1de007b8&language=en-US')->json()['results'];
    	//dump($data);
    	$genre = Http::get('https://api.themoviedb.org/3/genre/movie/list?api_key=1b869b3ccf57d089047ded4b1de007b8&language=en-US')->json()['genres'];

    	//dump($test);
    	return view('index', ['data'=>$data, 'genre'=>$genre]);
    }


    function movie($id) {
    	$link = 'https://api.themoviedb.org/3/movie/'. (int) $id .'?api_key=1b869b3ccf57d089047ded4b1de007b8&language=en-US';
    	$data = Http::get($link)->json();
    	//dump($data);
    	return view('movie', ['data'=>$data]);

    }

    function ajax($req) {
    	if(!$req) 
    		$link = 'https://api.themoviedb.org/3/discover/movie?api_key=1b869b3ccf57d089047ded4b1de007b8&language=en-US';
    	else
    		$link = 'https://api.themoviedb.org/3/discover/movie?api_key=1b869b3ccf57d089047ded4b1de007b8&language=en-US&sort_by='.$req;
    	$data = Http::get($link)->json()['results'];
    	//dump($data);
    	return view('ajaxMovie', ['data'=>$data, 'req'=>$req]);

    }

    function dateajax($start, $end) {
    	$link = 'http://api.themoviedb.org/3/discover/movie?api_key=1b869b3ccf57d089047ded4b1de007b8&primary_release_date.gte='.$start.'&primary_release_date.lte='.$end;
    	$data = Http::get($link)->json()['results'];
    	#dump($data);
    	return view('ajaxDateMovie', ['data'=>$data]);

    }


}
