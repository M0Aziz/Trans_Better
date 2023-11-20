<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $table = 'Commandes'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['total'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
