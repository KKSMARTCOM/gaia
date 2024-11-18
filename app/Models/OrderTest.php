<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'firstname',
        'phone',
        'address',
        'email',
        'building_type',
        'service_id',
        'commune_id',
        'price',
        'topographic_survey',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }
}
