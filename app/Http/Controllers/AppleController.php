<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class AppleController extends Controller
{
    public function index()
    {
        $brands = Brand::all(); // Példa: összes márka lekérdezése az adatbázisból

        return view('phones.apple', ['brands' => $brands]);
    }
}

