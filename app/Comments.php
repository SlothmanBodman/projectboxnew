<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
  /*Relationships*/
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Posts::class);
    }
}
