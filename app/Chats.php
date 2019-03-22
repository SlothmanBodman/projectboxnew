<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
  public function messages()
  {
      return $this->hasMany(Messages::class);
  }
}
