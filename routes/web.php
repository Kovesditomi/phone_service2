<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserContactController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SamsungController;
use App\Http\Controllers\AppleController;
use App\Http\Controllers\NokiaController;
use App\Http\Controllers\PixelController;
use App\Http\Controllers\XiaomiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Az új útvonalak az api-khoz
Route::get('/api/brands', [ApiController::class, 'getBrands']);
Route::get('/api/inserted-brands', [ApiController::class, 'getInsertedBrands']);
Route::get('/brand-list', [ApiController::class, 'getBrands'])->name('brand.list');
Route::get('/recent-brands', [ApiController::class, 'getInsertedBrands'])->name('brand.recent');
//select-hez
Route::get('/api/get-phone-models/{brandId}', [ApiController::class, 'getPhoneModels']);
Route::get('/api/get-types/{modelId}', [ApiController::class, 'getTypes']);
Route::get('/api/get-type-parts/{typeId}', [ApiController::class,'getTypeParts']);
Route::get('/api/get-parts/{partId}', [ApiController::class,'getParts']);
//blade ár és idő
Route::post('/api/set-selected-type-part-info', [ApiController::class, 'setSelectedTypePartInfo']);




Route::get('/user/contact', [UserContactController::class, 'showForm'])->name('user.contact.form');
Route::post('/submit-user-form', [UserContactController::class, 'store'])->name('submit.user.form');

Route::match(['get', 'head'], '/', function () {
    return view('welcome');
});
//az aloldalak útvonalai:

/*Route::match(['get', 'head'],'/phones/services', function () {
    return view('phones.services');
});
*/
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');



Route::get('/phones/apple', [AppleController::class, 'index'])->name('apple.index');

Route::match(['get', 'head'],'/phones/models/iphone14plus', function () {
    return view('phones/models/iphone14plus');
});

Route::match(['get', 'head'],'/phones/models/iphone14pro', function () {
    return view('phones/models/iphone14pro');
});

Route::match(['get', 'head'],'/phones/models/iphoneSE2gen', function () {
    return view('phones/models/iphoneSE2gen');
});

Route::match(['get', 'head'],'/phones/models/iphoneSE3gen', function () {
    return view('phones/models/iphoneSE3gen');
});


Route::match(['get', 'head'],'/phones/huawei', function () {
    return view('phones.huawei');
});

Route::match(['get', 'head'],'/phones/models/huaweiP20', function () {
    return view('phones/models/huaweiP20');
});

Route::match(['get', 'head'],'/phones/models/huaweiP20pro', function () {
    return view('phones/models/huaweiP20pro');
});

Route::match(['get', 'head'],'/phones/models/huaweiMate10', function () {
    return view('phones/models/huaweiMate10');
});

Route::match(['get', 'head'],'/phones/models/huaweiMate10pro', function () {
    return view('phones/models/huaweiMate10pro');
});

Route::match(['get', 'head'],'/phones/lenovo', function () {
    return view('phones.lenovo');
});

Route::match(['get', 'head'],'/phones/models/lenovoVibeK5', function () {
    return view('phones/models/lenovoVibeK5');
});

Route::match(['get', 'head'],'/phones/models/lenovoVibeX', function () {
    return view('phones/models/lenovoVibeX');
});

Route::match(['get', 'head'],'/phones/models/lenovoVibeX', function () {
    return view('phones/models/lenovoA7000');
});

Route::match(['get', 'head'],'/phones/models/lenovoVibeX', function () {
    return view('phones/models/lenovoA820');
});

Route::match(['get', 'head'],'/phones/lg', function () {
    return view('phones.lg');
});

Route::get('/phones/nokia', [NokiaController::class, 'index'])->name('nokia.index');

Route::match(['get', 'head'],'/phones/oneplus', function () {
    return view('phones.oneplus');
});

Route::get('/phones/pixel', [PixelController::class, 'index'])->name('pixel.index');


Route::get('/phones/samsung', [SamsungController::class, 'index'])->name('samsung.index');

Route::match(['get', 'head'],'/phones/sony', function () {
    return view('phones.sony');
});

Route::get('/phones/xiaomi', [XiaomiController::class, 'index'])->name('xiaomi.index');
// routes/web.php

Route::get('/phones', [PhoneController::class, 'index'])->name('phones.index');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
