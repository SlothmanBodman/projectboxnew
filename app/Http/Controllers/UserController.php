<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\User;
use App\Users;

class UserController extends Controller
{
    public function searchUsers(Request $request) {
      $q = $request->input('q');

      $users = Users::where('name','LIKE','%'.$q.'%')->get();

      return view('search')->with('users', $users)->withQuery( $q );
      }

}
