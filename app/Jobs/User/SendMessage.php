<?php

namespace App\Jobs\User;

use App\Loop\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $var;
    private $redis;


    /**
     * SendMessage constructor.
     *
     * @param string $value
     */
    public function __construct($value = 'default')
    {
        //
        $this->var = $value;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        info(sprintf("[%s][%s][%d][%s] ", __CLASS__, __FUNCTION__, $this->var, "开始消耗"));
        Message::sendMarkdownMsg("开始消耗",
            "# 开始消耗 🥶😳💆🏼‍♀️😩😏😭😊😂❤️  \n  > $this->var ❤️❤️❤️❤️ \n\n > -->【开始消耗】<-- \n > " . __CLASS__ . "\n\n");
        dispatch((new SendMessage('test'))->onQueue('user_login')->delay(now()->addSeconds(1)));


    }
}
