@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              @if(session('message'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                {{session('message')}}
              </div>
              @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Users</div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="col-md-3">{{trans('users.name')}}</th>
                                        <th>{{trans('users.email')}}</th>
                                        <th>{{trans('users.updated_at')}}</th>
                                        <th>{{trans('users.actions')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $data)
                                        <tr>
                                            <td><code>#U{!! $data->id !!}</code></td>
                                            <td>{!! $data->name !!}</td>
                                            <td><a href="mailto:{!! $data->email !!}">{!! $data->email !!}</a></td>
                                            <td>{!! $data->updated_at !!}</td>
                                            <td>
                                                <a href="{{url('users/edit', $data->id)}}">{{trans('users.edit')}}</a> | <a href="{{url('users/remove', $data->id)}}">{{trans('users.remove')}}
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
