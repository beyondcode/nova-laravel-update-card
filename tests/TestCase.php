<?php

namespace Beyondcode\LaravelUpdateCard\Tests;

use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase as Orchestra;
use Beyondcode\LaravelUpdateCard\CardServiceProvider;

abstract class TestCase extends Orchestra
{
    public function setUp()
    {
        parent::setUp();
        Route::middlewareGroup('nova', []);
    }
    protected function getPackageProviders($app)
    {
        return [
            CardServiceProvider::class,
        ];
    }
}