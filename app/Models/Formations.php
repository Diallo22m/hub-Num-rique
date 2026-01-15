<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formations extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'date_debut',
        'date_fin',
        'id_formateur', 
    ];
    //une formation appartient à un formateur
    public function formateur()
    {
        return $this->belongsTo(Formateurs::class, 'id_formateur');
    }

    //une formation peut avoir plusieurs inscriptions
    public function inscriptions()
    {
        return $this->hasMany(Inscriptions::class, 'id_formation');
    }


}
