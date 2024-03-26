<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brand';

    public function phoneModels()
    {
        return $this->hasMany(PhoneModel::class, 'brand_id');
    }
}