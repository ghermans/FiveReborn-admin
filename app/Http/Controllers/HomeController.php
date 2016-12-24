<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Kick the player from the server.
     *
     * @return \Illuminate\Http\Response
     */
    public function kick($id)
    {
      $kickmessage = trans('players.kicked');

      $con = new \App\Classes\q3query(config('fivereborn.ip'), config('fivereborn.port'), $success);
    	$con->setRconpassword(config('fivereborn.password'));
			$con->rcon("clientkick $id $kickmessage");

      return redirect()->route('players.index');
    }

    /**
     * Restart the the server.
     *
     * @return \Illuminate\Http\Response
     */
    public function restart()
    {

      $con = new \App\Classes\q3query(config('fivereborn.ip'), config('fivereborn.port'));
      $con->setRconpassword(config('fivereborn.password'));
      $con->rcon("restart");

      return redirect()->route('players.index');
    }

    public function test()
    {

    		$con = new \App\Classes\q3query(config('fivereborn.ip'), config('fivereborn.port'), $success);
    		$con->setRconpassword(config('fivereborn.password'));

    		$server_players_array=explode("\n",$con->rcon("status"));
    		$xpop = array_pop($server_players_array);
    		$server_players_total = count($server_players_array);

        return view('server/players', ['server_players_array' => $server_players_array, 'xpop' => $xpop, 'server_players_total' => $server_players_total]);

    }
}
