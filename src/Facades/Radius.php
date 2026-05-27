<?php

namespace Mivo\LaravelRadius\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Mivo\Radius\RadiusClient connect(string|array|null $name = null)
 * @method static bool disconnectUser(string $username)
 * 
 * @see \Mivo\LaravelRadius\RadiusManager
 * @see \Mivo\Radius\RadiusClient
 */
class Radius extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'radius';
    }
}
