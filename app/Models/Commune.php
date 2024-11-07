<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /* Relation avec les services */

    public function services()
    {
        return $this->belongsToMany(Service::class)
            ->withPivot('additional_price')
            ->withTimestamps();
    }
}
