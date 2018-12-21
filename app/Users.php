<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";

    public $primaryKey = 'id';

    public function likes()
    {
      return $this->hasMany(App/likes);
    }
}
