<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Slikar;
use App\Models\Kupac;

class Slika extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'godina',
        'cena',
        'slikar_id',
        'kupac_id',
    ];

    public function slikar()
    {
        return $this->belongsTo(Slikar::class);
    }

    public function kupac()
    {
        return $this->belongsTo(Kupac::class);
    }
}
