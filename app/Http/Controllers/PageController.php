<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
   public function index()
   {
       // Recupera tutti i film dalla tabella 'movies'
       $movies = Movie::all();

       // Mostra i dati per il debug


       // Passa i dati alla vista
       return view('home', compact('movies'));
   }
}
