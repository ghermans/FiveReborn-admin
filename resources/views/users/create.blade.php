@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">Create a new user</div>
        <div class="panel-body">
          <form action="{{url('users/create')}}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="control-label col-md-2">{{trans('users.name')}} <span class="text-danger">*</span></label>
               <div class="col-md-6">
                <input type="text" name="name" id="name" class="form-control">
               </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="control-label col-md-2">{{trans('users.email')}} <span class="text-danger">*</span></label>
              <div class="col-md-6">
               <input type="email" name="email" id="email" class="form-control">
             </div>
            </div>

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
              <label for="username" class="control-label col-md-2">{{trans('users.username')}} <span class="text-danger">*</span></label>
              <div class="col-md-6">
               <input type="text" name="username" id="username" class="form-control">
             </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="control-label col-md-2">{{trans('users.password')}} <span class="text-danger">*</span></label>
              <div class="col-md-6">
               <input type="password" name="password" id="password" class="form-control">
             </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-2">&nbsp;</label>
             <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Create account</button>
             <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</button>
          </div>
          </form>
        </div>
      </div>
    </div>
@endsection
