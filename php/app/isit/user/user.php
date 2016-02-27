<?php

namespace isit\user;

use Illuminate\Database\Eloquent\Model as Eloquent;

class user extends Eloquent
{
  protected $table = 'users';

  protected $fillable =[
    'email',
    'username',
    'password',
    'active',
    'active_hash',
    'remember_identifier',
    'remember_token',
  ];
}
