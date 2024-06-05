<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poi extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'indirizzo' , 'latitudine' , 'longitudine' , 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function getFormTag(){
        $tags = "";
        foreach($this->tags as $tag){
            $tags .= '#' . $tag->name . ' ';
        }
        return $tags;
    }
}


