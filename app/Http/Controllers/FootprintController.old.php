<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FootprintController extends Controller
{

  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  public function index()
  {
    //fetch 5 posts from database which are active and latest
    //$footprints = Footprints::where('is_active',1)->orderBy('created_at','desc')->paginate(5);
    $footprints = Auth::user()->footprints()->orderBy('created_at','desc')->paginate(5);
    //page heading
    $title = 'Latest Footprints';

// if (empty($footprints)) {
//    $footprints = "NIX";
// }
    //return footprints.blade.php template from resources/views folder
    return view('footprints')->with(['footprints' => $footprints])->withTitle($title);
  }

}
