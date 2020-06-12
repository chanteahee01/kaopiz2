<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';
    public function Comment(){
         
          {
              return $this->belongsTo('App\Comment', 'post_id', 'id');
          }
    }
}
