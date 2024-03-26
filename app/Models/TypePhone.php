<?php
// TypePhone.php modell

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypePhone extends Model
{
    protected $table = 'type_phone';
    protected $primaryKey = 'id';
    public function phonemodel()
    {
        return $this->belongsTo(Phonemodel::class, 'type_phone_id');
    }
}
