<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //renaming table which is automaticaly posts for model Post
    protected $table = 'posts';
    public $primaryKey= 'id';

    public function user() {
        return $this->belongsTo('App\User');
    }
}

