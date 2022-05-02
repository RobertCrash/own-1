<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  public function index()
  {
    //fetch 5 posts from database which are active and latest
    //$footprints = Footprints::where('is_active',1)->orderBy('created_at','desc')->paginate(5);
    //$users_accounts_email = Auth::user()->accounts_email()->orderBy('created_at','desc')->paginate(5);
    //page heading
    //$title = 'eMail Account';

    //$test = $footprints[0]->company->name;
    //return footprints.blade.php template from resources/views folder
    //return view('footprints')->with(['footprints' => $footprints, 'test' => $test])->withTitle($title);
    //return view('dashboard')->with(['users_accounts_email' => $users_accounts_email])->withTitle($title);
    return view('dashboard');
  }

}
