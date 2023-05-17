<?php

namespace Logbucket\LaravelLogbucket;

use Illuminate\Support\Facades\Facade;

class LaravelLogbucketFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return "laravel-logbucket";
    }
}
