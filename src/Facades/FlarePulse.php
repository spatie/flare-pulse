<?php

namespace Spatie\FlarePulse\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\FlarePulse\FlarePulse
 */
class FlarePulse extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Spatie\FlarePulse\FlarePulse::class;
    }
}
