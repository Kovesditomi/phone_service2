<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\PhoneModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function store(Request $request)
    {
        // ...

        $brand = new Brand;
        $brand->name = $request->input('name');
        $brand->description = $request->input('description');

        // Ellenőrizzük, hogy a $brand_id változó létezik-e és nem üres-e
        $brand_id = $request->input('brand_id');
        if (isset($brand_id) && !empty($brand_id)) {
            // Az azonosítóval lekérjük a brand objektumot az adatbázisból
            $brand = Brand::find($brand_id);

            // További kód a brand objektummal...
        } else {
            // Ha nincs megadva az azonosító, kezeljük le ezt az esetet
            // Például hibát dobhatunk vagy más logikát alkalmazhatunk
            // ...

            // Példa hibaüzenet küldése
            return response()->json(['error' => 'Brand ID is missing.'], 400);
        }

        // Kép nevét a brand objektumból kiolvasva
        $imageName = $brand->brand_image;

        // Ellenőrizzük, hogy a kép neve üres-e vagy null
        if ($imageName) {
            // Kép elérési útvonala a public mappán belül létrehozott 'images/brands' mappára hivatkozva
            $brand->image_path = asset('images/brands/' . $imageName);
        } else {
            // Ha a kép neve üres vagy null, kezeljük le ezt az esetet
            // Például beállíthatjuk egy alapértelmezett kép elérési útvonalát
            $brand->image_path = asset('images/brands/default.jpg');
        }

        $brand->save();

        // ...
    }
    public function getPhoneModels($brandId)
{
    $phoneModels = PhoneModel::where('brand_id', $brandId)->get();
    return response()->json($phoneModels);
}
}
