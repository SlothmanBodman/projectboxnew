<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
  /*Relationships*/
      public function user()
      {
          return $this->belongsTo(User::class);
      }
}
