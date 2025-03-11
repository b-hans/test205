<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function list () {

        $comics = Comic::all();

        return redirect->view('comics', ['comics' => $comics]);
        
    }
}
