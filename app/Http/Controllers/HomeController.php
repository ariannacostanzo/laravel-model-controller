<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//includo i movies
use App\Models\Movie;

class HomeController extends Controller
{
    public function __invoke()
    {
        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}
