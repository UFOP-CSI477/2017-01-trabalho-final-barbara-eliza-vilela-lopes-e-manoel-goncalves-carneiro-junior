<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
  protected $fillable = ['data', 'horario', 'medico', 'local', 'pesomae', 'pesobebe', 'resumo', 'users_id'];

}
