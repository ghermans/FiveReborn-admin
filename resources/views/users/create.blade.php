@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row">
          <div class="col-md-12">
            @if(session('success'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              {{session('success')}}
            </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
          </div>
      </div>
      <div class="row">
        <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">{{trans('users.createUserTitle')}}</div>
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
              <div class="col-sm-9 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Create account</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
