<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Auth middleware hozzáadása
        $this->middleware('check.user'); // A saját middleware hozzáadása
    }

    // További metódusok itt
}
