<?php

namespace App\Models;

use App\Models\Poi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function pois(){
        return $this->belongsToMany(Poi::class);
    }
}
