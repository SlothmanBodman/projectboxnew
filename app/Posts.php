<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = "posts";

    public $primaryKey = 'id';

    public function likes()
    {
      return $this-hasMany(App/likes);
    }
}
