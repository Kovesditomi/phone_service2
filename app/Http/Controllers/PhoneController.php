<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;
use App\Models\Phonemodel;
use App\Models\Parts; // Importáljuk a Typepart modelt
use App\Http\Controllers\Controller;

class PhoneController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $phonemodels = Phonemodel::all();
        $types = Parts::all();

        return view('phones.index', compact('brands', 'phonemodels', 'types'));
    }

    public function getPhoneModels($brand)
    {
        $phoneModels = PhoneModel::where('brand_id', $brand)->get();
        return response()->json($phoneModels);
    }

    public function getTypes($model)
    {
        $types = Parts::where('phonemodel_id', $model)->get(); // Módosítás itt
        return response()->json($types);
    }
}
