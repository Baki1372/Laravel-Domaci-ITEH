<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Slika;

class Slikar extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'godine',
        'broj_telefona',
    ];

    public function slike()
    {
        return $this->hasMany(Slika::class);
    }
}
