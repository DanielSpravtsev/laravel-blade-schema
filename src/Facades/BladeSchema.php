<?php

namespace DanielSpravtsev\BladeSchema\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DanielSpravtsev\BladeSchema\BladeSchema
 */
class BladeSchema extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-blade-schema';
    }
}
