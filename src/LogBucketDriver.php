<?php

namespace LogBucket\LaravelLogBucket;

use Monolog\Handler\AbstractProcessingHandler;
use Monolog\LogRecord;

class LogBucketDriver extends AbstractProcessingHandler
{
    protected function write(LogRecord $record): void
    {
    }
}
