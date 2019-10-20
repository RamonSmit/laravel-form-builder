<?php

namespace DALTCORE\LaravelFormBuilder\Tests;

use DALTCORE\LaravelFormBuilder\Facades\LaravelFormBuilder;
use DALTCORE\LaravelFormBuilder\ServiceProvider;
use Orchestra\Testbench\TestCase;

class LaravelFormBuilderTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'laravel-form-builder' => LaravelFormBuilder::class,
        ];
    }

    public function testExample()
    {
        assertEquals(1, 1);
    }
}
