<?php

namespace Highjin\JobMonitor\Events;

use Carbon\Carbon;
use Napopravku\Events\QueueableEvent;

class MockNotifyEvent implements QueueableEvent
{
    public string $name;
    public array $data;
    public Carbon $finishedAt;

    public function __construct(string $name, array $data)
    {
        $this->data = $data;
        $this->name = $name;
        $this->finishedAt = Carbon::now();
    }
}
