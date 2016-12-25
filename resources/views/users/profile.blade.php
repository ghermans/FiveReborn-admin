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
          </div>
      </div>

        <div class="row">
           <div class="col-md-12">
             <div class="panel panel-default">
               <div class="panel-heading">Profile Settings</div>
                  <div class="panel-body">
                     <form method="POST" action="{{route('profile.save')}}" class="form-horizontal">
                         {!! csrf_field() !!}
                       <div class="form-group">
                         <label for="name" class="control-label col-sm-3">{{trans('users.name')}}</label>
                            <div class="col-sm-6">
                              <p class="form-control-static">{{ Auth::user()->name }}</p>
                           </div>
                        </div>

                         <div class="form-group">
                           <label for="username" class="control-label col-sm-3">{{trans('users.username')}}</label>
                          <div class="col-sm-6">
                           <p class="form-control-static">{{ Auth::user()->username }}</p>
                          </div>
                         </div>

                        <div class="form-group">
                          <label for="email" class="control-label col-sm-3">{{trans('users.email')}} <span class="text-danger">*</span></label>
                           <div class="col-sm-6">
                             <input type="text" id="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
                           </div>
                        </div>

                        <div class="form-group {{ $errors->has('newPassword') ? ' has-error' : '' }}">
                         <label for="newPassword" class="control-label col-sm-3">{{trans('users.newPassword')}}</label>
                          <div class="col-sm-6">
                           <input type="password" name="newPassword" id="newPassword" class="form-control">
                             @if ($errors->has('password'))
                              <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                              </span>
                             @endif
                           </div>
                          </div>

                            <div class="form-group">
                             <div class="col-sm-9 col-sm-offset-3">
                              <button type="submit" class="btn btn-primary">{{ trans('app.update') }}</button>
                              <button type="reset" class="btn btn-danger">{{ trans('app.cancel') }}</button>
                              </div>
                            </div>
                        </form>
                      </div>
                   </div>
                </div>
               </div>
             </div>
@endsection
