<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\FerryController;

class Ferry extends Model
{
    use HasFactory;

    protected $table = 'ferries';

    protected $fillable = [
        'nom',
        'photo',
        'longueur',
        'largeur',
        'vitesse',
    ];
}
