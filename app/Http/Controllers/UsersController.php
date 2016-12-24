<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewUserValidator;
use App\User;

class UsersController extends Controller
{
  /**
   * UsersController constructor.
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show all users.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data['users'] = User::paginate(15);
    return view('users/index', $data);
  }

  /**
   * Show the user registration form.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('users/create');
  }

  /**
   * Store the new member in the database
   *
   * @param  Requests\NewUserValidator $request
   * @return \Illuminate\Http\RedirectResponse
   */
   public function saveUser(Request $request)
   {

       User::create(
        [
          'name'      => $request->name,
          'email'     => $request->email,
          'username'  => $request->username,
          'password'  => \Hash::make($request->password),
        ]
      );
      session()->flash('success', trans('users.userCreated'));
      return redirect()->route('users.index');
     }

     /**
      * Show the profile page.
      *
      * @return \Illuminate\Http\Response
      */
     public function remove($id)
     {
       $User = User::find($id);
       $User->delete();

       return redirect()->route('users.index');
     }

     /**
      * Show the profile page.
      *
      * @return \Illuminate\Http\Response
      */
     public function profile()
     {
       return view('users/profile');
     }
   }
