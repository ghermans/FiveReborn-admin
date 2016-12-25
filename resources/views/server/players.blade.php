  <div class="panel panel-default">
    <div class="panel-heading">
    Current total players  {!! $server_players_total !!}
    </div>
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>{{ trans('players.id') }}</th>
            <th>{{ trans('players.gamerTag') }}</th>
            <th>{{ trans('players.steamAccount') }}</th>
            <th>{{ trans('players.ipaddress') }}</th>
            <th>{{ trans('players.ping') }}</th>
            <th>{{ trans('players.actions') }}</th>
          </tr>
        </thead>
        <tbody>
           @if (count($server_players_array) > 0)
           @foreach ($server_players_array as $server_player)
           <?php
           $playerinfo=explode(" ",$server_player);
           $player_id = array_shift($playerinfo);
           $player_ipsteam = array_shift($playerinfo);
           $player_ipsteam2 = explode(":", $player_ipsteam);

           if($player_ipsteam2[0] == "steam"){
             $player_ipsteam3 = $player_ipsteam2[1];
           }else{
             $player_ipsteam3 = "-";
           }

           $player_ping = array_pop($playerinfo);
           $ipData = array_pop($playerinfo);
           $player_name = implode(" ", $playerinfo);

           if (preg_match('~\b([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}):([0-9]{1,5}\b)~', $ipData, $matches)) {
             $player_ip = $matches[1];
             $port = $matches[2];
           }

           ?>

           <tr>
             <td>{!! $player_id !!}</td>
             <td>{!! $player_name !!}</td>
             <td>{!! $player_ipsteam3 !!}</td>
             <td>{!! $player_ip !!}</td>
             <td>{!! $player_ping !!}</td>
             <td>
               <a href="{{route('action.kick', $player_id)}}">{{ trans('players.kick') }}</a> |
               <a href="{{route('action.ban', $player_id)}}">{{ trans('players.ban') }}</a>
             </td>
           </tr>
           @endforeach
          @else
          <tr>
             <td colspan="6" class="text-center text-danger">{{ trans('players.noPlayers') }}</td>
           </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
