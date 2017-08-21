<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gravidez;
use App\User;


class GravidezController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function calculo()
    {
        $users = User::orderBy('id')->get();
        return view('gravidez.calculo')->with('users', $users);
    }

    public function show()
    {
      $users = User::orderBy('id')->get();
      return view('gravidez.calculo')->with('users', $users);
    }
}
