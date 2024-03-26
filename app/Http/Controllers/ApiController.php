<?php
namespace App\Http\Controllers;
//fejléceket mindig importálni kell
//csak akkor tudod, ha van model hozzá
use App\Models\Brand;
use App\Models\Parts;
use App\Models\TypePhone;
use App\Models\PhoneModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TypePart;



class ApiController extends Controller
{
    public function getBrands()
    {
        $brands = Brand::all();
        return response()->json($brands);
    }

    public function getInsertedBrands()
    {
        $insertedBrands = Brand::where('created_at', '>=', now()->subDay())->get();
        return response()->json($insertedBrands);
    }
//itt megkapjuk a xiaomi brandhez az pl, hogy redmi a phonemodel táblából
    public function getPhoneModels($brandId)
    {
        $phoneModels = PhoneModel::where('brand_id', $brandId)->get();
        return response()->json($phoneModels);
    }
//itt kapom meg a type_phone táblából pl note19
    public function getTypes($modelId)
{
    $types = TypePhone::where('phonemodel_id', $modelId)->get();
    return response()->json($types);
}
    //itt kell kiolvasni az adatot a parts táblából
public function getTypeParts($typeId)
{
    $typeParts = TypePart::where('type_id', $typeId)->get();
    // A typeParts tömb utolsó eleme
    $lastTypePart = $typeParts->last();

    // JSON válasz küldése
    //return response()->json(['selectedTypePartInfo' => $lastTypePart->repair . ' - ' . $lastTypePart->price]);
    return response()->json(['typeParts' => $typeParts]);
}

//parts tábla api
public function getParts($partId)
{
    $parts = Parts::where('part_id', $partId)->get();
    $response = response()->json($parts);
    //dd($parts);
    return $response;
}


public function setSelectedTypePartInfo(Request $request)
{
    $selectedTypePartInfo = $request->input('selectedTypePartInfo');

    // A $selectedTypePartInfo változó beállítása a Laravel munkamenetben
    session(['selectedTypePartInfo' => $selectedTypePartInfo]);

    // JSON válasz küldése
    return response()->json(['success' => true]);
}



}
