<?php

namespace gjsbrt\NetBox;

/**
 * @method static \gjsbrt\NetBox\Api
 */
class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'NetBox';
    }
}
