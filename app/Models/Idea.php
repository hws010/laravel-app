<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    public $fillable = ['descreption', 'state'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
