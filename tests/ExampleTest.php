<?php

namespace Freddymu\Bread\Tests;

use Orchestra\Testbench\TestCase;
use Freddymu\Bread\BreadServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [BreadServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
