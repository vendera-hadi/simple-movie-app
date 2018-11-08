<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Film;

class FilmController extends Controller
{
    public function index()
    {
        return Film::all();
    }

    public function show($slug)
    {
        return Film::where('slug',$slug)->first();
    }
}