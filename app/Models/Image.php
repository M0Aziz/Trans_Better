<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Moyen; 

class Image extends Model
{
    use HasFactory;
    protected $table = 'images'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['moyen_id','path'];

    public function moyen()
    {
        return $this->belongsTo(Moyen::class , 'moyen_id','id');
    }
}
