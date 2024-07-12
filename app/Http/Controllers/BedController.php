<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BedController extends Controller
{
    public function index()
    {
        return view('dash-compo.bed');
    }
}
