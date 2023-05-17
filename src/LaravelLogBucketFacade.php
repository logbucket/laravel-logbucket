<?php

namespace LogBucket\LaravelLogBucket;

use Illuminate\Support\Facades\Facade;

class LaravelLogBucketFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return "LogBucketDriver";
    }
}
