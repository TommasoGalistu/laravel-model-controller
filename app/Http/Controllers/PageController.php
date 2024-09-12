<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
   public function index()
   {
       $movies = Movie::all();
       return view('home', compact('movies'));
   }
   public function best()
   {
       $movies = Movie::where('vote', '>=', 9)->get();

       return view('home', compact('movies'));
   }
   public function description($id)
   {
        $movies = Movie::all();
        $film = $movies->find($id);
       return view('description', compact('film'));
   }

}


