<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategorie extends Model
{
    use HasFactory;
    protected $table = 'sous_categories'; 
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'nom',
        'categorie_id',

    ];


    public function categorie()
{
    return $this->belongsTo(Categorie::class, 'categorie_id');
}
   
}
