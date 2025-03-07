<?php

namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function list ( ) {

        $c = Comics::all();

        dd ('tester x', $c);
    }
}
