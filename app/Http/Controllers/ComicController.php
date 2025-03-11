<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function list () {

        $comic = Comic::create(['title' => 'Hey tester']);
        $comics = Comic::all();

        dd ('test', $comics, $comic);
    }
}
