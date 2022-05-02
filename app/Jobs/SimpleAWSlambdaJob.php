<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Aws\Laravel\AwsFacade as AWS;

use App\Models\User;

class SimpleAWSlambdaJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $user_id;
    private $user;

    private $res;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $user_id, User $user)
    {
        $this->user_id = $user_id;
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo date('h:i:s') . " Jod started" . "\n";

        echo $this->job->uuid() . "\n";
        echo " user_id: " . $this->user_id . "\n";
        //dump($this);
        echo " username: " . $this->user->name . "\n";


        $lambda = AWS::createClient('lambda');
        $syncresult = $lambda->invoke([
          'FunctionName' => 'my-function',
          //'InvocationType' => 'RequestResponse',
          //'Payload' => json_encode($payload),
        ]);

        echo $syncresult->get('Payload') . "\n";

        //sleep(10);

        echo date('h:i:s') . " Jod finished" . "\n";
    }
}
