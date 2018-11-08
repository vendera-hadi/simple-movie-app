<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    /**
     * Show the index page for films.
     *
     */
    public function index()
    {
        return view('films.index');
    }

    public function show(Request $request, $slug)
    {
        return view('films.show', compact('slug'));
    }

    public function create()
    {
        return view('films.create');
    }

    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'release_date' => 'required',
            'ticket_price' => 'required',
            'rating' => 'required|numeric',
            'genre' => 'required',
            'country' => 'required',
            'photo' => 'required|url'
        ]);

        $data_to_be_stored = $request->except('_token');
        $data_to_be_stored["slug"] = str_slug($request->name);

        $film = Film::create($data_to_be_stored);
        $request->session()->flash('success', 'Task was successful!');
        return redirect()->back();
    }
}