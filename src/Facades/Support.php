<?php

namespace Deka\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Deka\Support\Support
 */
class Support extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Deka\Support\Support::class;
    }
}
