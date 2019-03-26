<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chats extends Model
{
  public function messages()
  {
      return $this->hasMany(Messages::class);
  }

  public function userone()
  {
     return $this->belongsTo("App\User", "user_one_id", "id");
  }

  public function usertwo()
  {
      return $this->belongsTo("App\User", "user_two_id", "id");
  }

}
