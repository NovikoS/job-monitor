<?php

namespace Highjin\JobMonitor\Traits;

use Highjin\JobMonitor\Models\JobMonitor;
use Highjin\JobMonitor\ResourceModels\JobDataResourceModel;

trait MonitorTrait
{
    private function saveObjectState(string $eventName = null, array $eventData = null): void
    {
        if (app()->environment() !== 'production') {
            $data = new JobDataResourceModel();
            $monitor = new jobMonitor();
            $data->jobName = $eventName ?? get_class($this);
            $data->mockData = $eventData ?? get_object_vars($this);
            $monitor->mock_data = json_encode($data);
            $monitor->status = jobMonitor::STATUS_CREATED;
            $monitor->save();
        }
    }
}