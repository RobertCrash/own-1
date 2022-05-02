<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;

use App\Jobs\SimpleFetchEmailsJobGoogle;
use App\Jobs\SimpleFetchEmailsJobMicrosoft;
use App\Jobs\SimpleLoginEmailJob;

use App\Jobs\SimpleJob;

use Carbon\Carbon;

class DashboardContent extends Component
{
    public $start_discover_msg = '';
    
    public function startDiscover()
    {
        $provider = auth()->user()->provider;

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

        $this->start_discover_msg = "Job Started";
    }

    public function render()
    {
        return view('livewire.dashboard-content');
    }
}
