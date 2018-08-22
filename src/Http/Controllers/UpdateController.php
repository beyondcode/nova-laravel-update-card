<?php

namespace Beyondcode\LaravelUpdateCard\Http\Controllers;

use Packagist\Api\Client;
use Beyondcode\LaravelUpdateCard\Version;

class UpdateController
{
    public function check()
    {
        $client = new Client();

        $package = $client->get('laravel/laravel');

        $versions = array_map(function ($version) {
            return $version->getVersion();
        }, $package->getVersions());

        $current = app()->version();
        $latest = Version::latest($versions);

        return [
            'current_version' => $current,
            'latest_version' => $latest,
            'update_available' => version_compare($current, $latest, '<')
        ];
    }
}