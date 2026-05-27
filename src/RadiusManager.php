<?php

namespace Mivo\LaravelRadius;

use Illuminate\Support\Manager;
use Mivo\Radius\RadiusClient;

class RadiusManager extends Manager
{
    /**
     * Get the default connection name.
     */
    public function getDefaultDriver(): string
    {
        return $this->config->get('radius.default', 'default');
    }

    /**
     * Create an instance of the RadiusClient using a configuration array.
     */
    public function createConnection(array $config): RadiusClient
    {
        return new RadiusClient(
            $config['server'] ?? '127.0.0.1',
            $config['secret'] ?? 'testing123',
            $config['port'] ?? 3799,
            $config['timeout'] ?? 5
        );
    }

    /**
     * Create the default connection driver.
     */
    public function createDefaultDriver(): RadiusClient
    {
        $config = $this->config->get('radius.connections.default', []);
        return $this->createConnection($config);
    }

    /**
     * Connect to a specific driver or dynamic configuration array.
     * 
     * @param string|array|null $name
     * @return RadiusClient
     */
    public function connect($name = null): RadiusClient
    {
        if (is_array($name)) {
            return $this->createConnection($name);
        }

        return $this->driver($name);
    }
}
