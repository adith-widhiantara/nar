<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OmdbapiController extends Controller
{
    public function index()
    {
        return view('omdb.search');
    }

    public function store(Request $request)
    {
        return redirect()->route('omdb.search', ['search' => $request->film, 'page' => 1]);
    }

    public function search($movie, $page = 1)
    {
        $response = Http::get('http://www.omdbapi.com', [
            'apikey' => 'faf7e5bb',
            's' => $movie,
            'page' => $page
        ]);

        return view('omdb.omdbapi')
            ->with('response', json_decode($response, true))
            ->with('search', $movie)
            ->with('page', $page);
    }
}
