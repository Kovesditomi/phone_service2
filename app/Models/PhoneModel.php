<?php
// app/Models/PhoneModel.php
namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhoneModel extends Model
{
    use HasFactory;
    protected $table = 'phonemodel'; 
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function typePhones()
    {
        return $this->hasMany(TypePhone::class, 'type_phone_id');
    }
}
