<?php

namespace Freddymu\Bread;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Freddymu\Bread\Skeleton\SkeletonClass
 */
class BreadFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bread';
    }
}
