<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateurs extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'specialite', 
    ];
    //un formateur peut donner plusieurs formations
    public function formations()
    {
        return $this->hasMany(Formations::class, 'id_formateur');
    }
    
}
