@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">Create a new user</div>
        <div class="panel-body">
          <form>
            <div class="form-group">
              <label for="firstName">First name</label>
              <input type="text" name="firstName" class="form-control" id="firstName">
            </div>

            <div class="form-group">
              <label for="lastName">Last name</label>
              <input type="text" name="lastName" class="form-control" id="lastName">
            </div>

            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password">
            </div>

            <div class="form-group">
              <label for="confirmPassword">Confirm password</label>
              <input type="password" class="form-control" id="confirmPassword">
            </div>

            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Create account</button>
            <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</button>
          </form>
        </div>
      </div>
    </div>
@endsection
