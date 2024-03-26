<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class SamsungController extends Controller
{
    public function index()
    {
        $brands = Brand::all(); // Példa: összes márka lekérdezése az adatbázisból

        return view('phones.Samsung', ['brands' => $brands]);
    }
}
