<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Kick the player from the server.
   *
   * @return \Illuminate\Http\Response
   */
  public function kick($id)
  {
    $message = trans('players.kicked');

    $con = new \App\Classes\q3query(config('fivereborn.ip'), config('fivereborn.port'));
    $con->setRconpassword(config('fivereborn.password'));
    $con->rcon("clientkick $id $message");

    return redirect()->route('players.index');
  }

  /**
   * Ban the player from the server.
   *
   * @return \Illuminate\Http\Response
   */
  public function ban($id)
  {
    $message = trans('players.banned');

    $con = new \App\Classes\q3query(config('fivereborn.ip'), config('fivereborn.port'));
    $con->setRconpassword(config('fivereborn.password'));
    $con->rcon("clientban $id $message");

    return redirect()->route('players.index');
  }
}
