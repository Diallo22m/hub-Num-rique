<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'adresse', 
        'profession'
    ];
    //un participant peut appartenir à plusieurs insctriptions
    public function inscriptions()
    {
        return $this->hasMany(Inscriptions::class, 'id_participant');
    }
    
}
