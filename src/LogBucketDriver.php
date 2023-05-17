<?php

namespace LogBucket\LaravelLogBucket;

use Monolog\Handler\AbstractProcessingHandler;

class LogBucketDriver extends AbstractProcessingHandler
{
    protected function write(array $record): void
    {
        dd($record);
    }
}
