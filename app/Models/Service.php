<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'base_price'
    ];

    /* Relation avec les communes */

    public function communes()
    {
        return $this->belongsToMany(Commune::class)
            ->withPivot('additional_price')
            ->withTimestamps();
    }
}
