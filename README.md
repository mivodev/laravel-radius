# Mivo Laravel Radius Wrapper

A Laravel Facade and Hybrid Connection Manager for `mivodev/radius`.

This package simplifies the integration of the UDP Radius client into Mivo Enterprise by providing dynamic configuration management (e.g. connecting to different Edge Routers dynamically) and a clean, static interface.

## Installation

```bash
composer require mivodev/laravel-radius
```

## Features
- **Hybrid Connection Manager**: Seamlessly switch between default (`.env`) and dynamic configuration arrays fetched from the database.
- **Facade**: Intuitive `Radius::` interface.

## Usage

### Using the Default Connection

```php
use Mivo\LaravelRadius\Facades\Radius;

// Disconnect a user on the default server configured in .env
$success = Radius::disconnectUser('john_doe');
```

### Using a Dynamic Connection (Mivo Enterprise Multi-Tenant)

```php
use Mivo\LaravelRadius\Facades\Radius;

// Fetch NAS IP dynamically from the database
$nasConfig = [
    'server' => '10.0.0.5',
    'secret' => 'nas_secret_key',
    'port'   => 3799,
];

// Disconnect user on a specific NAS
$success = Radius::connect($nasConfig)->disconnectUser('john_doe');
```