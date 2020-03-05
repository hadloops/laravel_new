<?php

namespace App\Jobs\User;

use App\Loop\Log;
use App\Loop\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;

class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $var;
    private $redis;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($var)
    {
        //
        $this->var   = $var;
        $this->redis = new Redis();
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        if ( !$this->redis->get(__CLASS__) ) {
            Message::sendMarkdownMsg("开始消耗", "开始消耗");
            $this->redis->set(__CLASS__, 1, 100);
        }
        Log::error(sprintf("[%s][%d][%s] ", __CLASS__, $this->var, "开始消耗"));


    }
}
