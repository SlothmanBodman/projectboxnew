<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class likes extends Model
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
