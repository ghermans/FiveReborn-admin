<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;

use \App\Classes\q3query as q3query;

class CurrentPlayers extends AbstractWidget
{
   /**
   * The number of seconds before each reload.
   *
   * @var int|float
  */
    public $reloadTimeout = 5;


    public function placeholder()
    {
        return "<p class=\"text-center\"><i class=\"fa fa-circle-o-notch fa-spin fa-fw\"></i>
                <span>Loading data from FiveReborn server...</span></p>";
    }

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
       $con = new q3query(config('fivereborn.ip'), config('fivereborn.port'));
       $con->setRconpassword(config('fivereborn.password'));

       $server_players_array=explode("\n",$con->rcon("status"));
       $xpop = array_pop($server_players_array);
       $server_players_total = count($server_players_array);
       return view('server/players', ['server_players_array' => $server_players_array, 'xpop' => $xpop, 'server_players_total' => $server_players_total]);
    }
}
