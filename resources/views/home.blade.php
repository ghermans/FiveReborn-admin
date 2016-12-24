@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
          @asyncWidget('CurrentPlayers')
        </div>
      </div>
</div>
@endsection
