<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Slika;

class Kupac extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'broj_telefona',
        'email',
    ];

    public function slike()
    {
        return $this->hasMany(Slika::class);
    }
}
