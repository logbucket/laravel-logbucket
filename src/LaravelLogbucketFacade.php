<?php

namespace Logbucket\LaravelLogbucket;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Logbucket\LaravelLogbucket\Skeleton\SkeletonClass
 */
class LaravelLogbucketFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-logbucket';
    }
}
