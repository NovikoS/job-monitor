<?php

namespace Highjin\JobMonitor\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $status
 * @property string $mock_data
 * @property int $id
 */
class JobMonitor extends Model
{
    public const STATUS_CREATED = 'created';

}
