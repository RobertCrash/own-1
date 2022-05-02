<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Filters\UsersFootprintFilter;

class FootprintController extends Controller
{

  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  public function footprints(UsersFootprintFilter $filter)
  {
    //$footprints = auth()->user()->footprints()->orderBy('created_at','desc')->paginate(5);
    $footprints = auth()->user()->footprints()->filter($filter)->paginate(5);

    foreach ($footprints as $footprint) {
      $footprint->company;
    }

    return response()->json($footprints);
  }

  public function index()
  {
    return view('footprints');
  }

}
