<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comment';
    public function Post(){
         
          {
              return $this->hasMany('App\Post', 'post_id', 'id');
          }
    }
}
