<?php

namespace Mivo\LaravelRadius\Facades;

use Illuminate\Support\Facades\Facade;
use Mivo\LaravelRadius\RadiusManager;
use Mivo\Radius\RadiusClient;

/**
 * @method static \Mivo\Radius\RadiusClient connect(string|array|null $name = null)
 * @method static bool disconnectUser(string $username)
 *
 * @see RadiusManager
 * @see RadiusClient
 */
class Radius extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'radius';
    }
}
