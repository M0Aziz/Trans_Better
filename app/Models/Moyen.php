<?php

namespace App\Models;
use App\Models\Image; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moyen extends Model
{
    use HasFactory;
    protected $table = 'moyen'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['numero', 'description','horaire'];

    public function images()
    {
        return $this->hasMany(Image::class , 'moyen_id','id');
    }
}
