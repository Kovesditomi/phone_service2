<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand; // A Brand modell használata

class ServicesController extends Controller
{
    public function index()
    {
        $brands = Brand::all(); // Példa: összes márka lekérdezése az adatbázisból

        return view('phones.services', ['brands' => $brands]);
    }
}