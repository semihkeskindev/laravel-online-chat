<?php

namespace App\Listeners\Illuminate\Contracts\Broadcasting;

use App\Events\MessagePushed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ShouldBroadcastNow
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MessagePushed  $event
     * @return void
     */
    public function handle(MessagePushed $event)
    {
        //
    }
}
