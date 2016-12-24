@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Settings</div>
                    <div class="list-group">
                        <a class="list-group-item" href="#profile" aria-controls="home" role="tab" data-toggle="tab">
                            <span class="fa fa-user"></span> Account details
                        </a>
                        <a class="list-group-item" href="#security" aria-controls="home" role="tab" data-toggle="tab">
                            <span class="fa fa-lock"></span> Change password
                        </a>
                    </div>
                </div>

            </div>

             <div class="col-md-9">
                 <div class="tab-content">
                     <div role="tabpanel" class="tab-pane active" style="padding: 0" id="profile">
                         <div class="panel panel-default">
                             <div class="panel-heading">Profile Settings</div>
                             <div class="panel-body">
                                 <form method="POST" action="" class="form-horizontal">
                                     {!! csrf_field() !!}
                                     <fieldset>

                                         <div class="form-group form-sep">
                                             <label for="name" class="control-label col-sm-2">
                                                 {{trans('users.name')}} <span class="text-danger">*</span></label>
                                             <div class="col-sm-8">
                                                 <input id="name" name="name" class="form-control" value="{{ Auth::user()->name }}" type="text">
                                             </div>
                                         </div>

                                         <div class="form-group form-sep">
                                             <label for="username" class="control-label col-sm-2">
                                                 {{trans('users.username')}} <span class="text-danger">*</span>
                                             </label>
                                             <div class="col-sm-8">
                                                 <input type="text" id="username" name="username" value="{{ Auth::user()->username }}" class="form-control">
                                             </div>
                                         </div>

                                         <div class="form-group form-sep">
                                             <label for="email" class="control-label col-sm-2">{{trans('users.email')}} <span class="text-danger">*</span></label>
                                             <div class="col-sm-8">
                                                 <input type="text" id="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
                                             </div>
                                         </div>

                                         <div class="form-group">
                                             <div class="col-sm-8 col-sm-offset-2">
                                                 <button class="btn btn-success" type="submit">{{ trans('app.update') }}</button>
                                                 <button type="reset" class="btn btn-danger">Cancel</button>
                                             </div>
                                         </div>
                                     </fieldset>
                                 </form>
                             </div>
                         </div>
                     </div>

                     {{-- Security --}}
                     <div role="tabpanel" class="tab-pane" style="padding: 0" id="security">
                         <div class="panel panel-default">
                             <div class="panel-heading">
                                 Security
                             </div>
                             <div class="panel-body">
                                 <form action="" method="POST" class="form-horizontal">
                                     {!! csrf_field() !!}

                                     <div class="form-group form-sep {{ $errors->has('password') ? ' has-error' : '' }}">
                                         <label for="password" class="control-label col-sm-3">
                                             {{trans('users.password')}}
                                             <span class="text-danger">*</span>
                                         </label>
                                         <div class="col-sm-8">
                                          <input type="password" name="password" id="password" class="form-control">
                                             @if ($errors->has('password'))
                                                 <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="form-group form-sep {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                         <label for="confirm" class="control-label col-sm-3">
                                             Confirm password
                                             <span class="text-danger">*</span>
                                         </label>
                                         <div class="col-sm-8">
                                             <input type="password" placeholder="{{trans('profile.confirmPass')}}" name="password_confirmation" id="confirm" class="form-control">
                                             @if ($errors->has('password'))
                                                 <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                             @endif
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <div class="col-sm-8 col-sm-offset-3">
                                             <button class="btn btn-success" type="submit">{{ trans('users.updatePassword') }}</button>
                                             <button type="reset" class="btn btn-default">Cancel</button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                     {{-- End security --}}
                 </div>
             </div>


            </div>
        </div>
@endsection
