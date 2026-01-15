<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscriptions extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'id_participant',
        'id_formation',
        'date_inscription', 
    ];
    //une inscription appartient à un participant
    public function participant()
    {
        return $this->belongsTo(Participant::class, 'id_participant');
    }   
    //une inscription appartient à une formation
    public function formation()
    {
        return $this->belongsTo(Formations::class, 'id_formation');
    }

    
}
