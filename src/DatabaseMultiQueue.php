<?php

namespace Officeguru\MultiQueue;

use Illuminate\Queue\DatabaseQueue;

class DatabaseMultiQueue extends DatabaseQueue {
    public function pushOn($queue, $job, $data = '')
    {
        if (!is_array($queue)) {
            $queue = [$queue];
        }

        foreach ($queue as $item) {
            parent::pushOn($item, $job, $data);
        }
    }
}