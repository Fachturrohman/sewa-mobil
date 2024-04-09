<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'merk',
        'model',
        'nomor_plat',
        'tarif',
    ];

    public function rental()
    {
        return $this->hasMany(Rental::class);
    }
}
