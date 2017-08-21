<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bebe extends Model
{
    protected $fillable = ['nome', 'sexo', 'nascimento', 'users_id'];
}
