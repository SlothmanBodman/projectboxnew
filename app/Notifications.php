<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
  /*Relationships*/
  public function user()
  {
     return $this->belongsTo("App\User", "creator_id", "id");
  }
}
