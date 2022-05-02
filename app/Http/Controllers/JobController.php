<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Jobs\SimpleFetchEmailsJobGoogle;
use App\Jobs\SimpleFetchEmailsJobMicrosoft;
use App\Jobs\SimpleLoginEmailJob;

use App\Jobs\SimpleJob;

use Carbon\Carbon;


class JobController extends Controller
{

  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }

  public function gmail(){
    $res = SimpleFetchEmailsJobGoogle::dispatch(Auth::user()->id)->delay(Carbon::now()->addSeconds(5));
    return response()->json(['status' => 200 , 'message' => $res]);
  }

  public function microsoft(){
    $res = SimpleFetchEmailsJobMicrosoft::dispatch(Auth::user()->id)->delay(Carbon::now()->addSeconds(5));
    return response()->json(['status' => 200 , 'message' => $res]);
  }

  public function simpleEmailJob(Request $request){
    $res = SimpleLoginEmailJob::dispatch(Auth::user()->id , $request->password)->delay(Carbon::now()->addSeconds(5));
    return response()->json(['status' => 200 , 'message' => $res]);
  }

  public function startDiscover(Request $request)
  {
    $provider = Auth::user()->provider;

    if($provider == 'google') {
      $res = SimpleFetchEmailsJobGoogle::dispatch(Auth::user()->id)->delay(Carbon::now()->addSeconds(1));
    }
    if($provider == 'microsoft') {
      $res = SimpleFetchEmailsJobMicrosoft::dispatch(Auth::user()->id)->delay(Carbon::now()->addSeconds(1));
    }
    if($provider == 'yahoo') {
      //$res = SimpleFetchEmailsJobYahoo::dispatch(Auth::user()->id)->delay(Carbon::now()->addSeconds(1));
    }
    if($provider == 'pop3_imap') {

    }
    else {

    }

    return $request->wantsJson()
                ? response()->json(['msg' => 'job-started', 'status' => 200])
                : back()->with('status', 'job-started');
    //return response()->json(['msg' => 'job-started', 'status' => 200]);
  }

// public function start(Request $request)
//   {

//     SimpleJob::dispatch(Auth::user()->id, Auth::user());

//     return $request->wantsJson()
//                 ? new JsonResponse('', 200)
//                 : back()->with('status', 'job-started');
//   }

}
