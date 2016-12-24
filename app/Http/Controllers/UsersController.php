<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Faker\Factory as Faker;

class UsersController extends Controller
{
  /**
   * UsersController constructor.
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
    $data['users'] = User::paginate(15);
    return view('users/index', $data);
  }

  public function create()
  {
    return view('users/create');
  }

  public function profile()
  {
    return view('users/profile');
  }
}
