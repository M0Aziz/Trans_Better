<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['nom', 'prix'];


    public function images()
    {
        return $this->hasMany(Image::class, 'id_ticket');
    }
    
}

