<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szavak extends Model
{
    use HasFactory;

    protected $fillable = [
        'angol',
        'magyar',
        'temaId',
    ];

    public function tema(){
        return $this->belongsTo(Tema::class, 'temaId', 'id');
    }
    

}
