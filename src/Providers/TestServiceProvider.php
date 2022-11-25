<?php

namespace Tripteki\Test\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        $this->registerPublishers();
    }

    /**
     * @return void
     */
    protected function registerPublishers()
    {
        $this->publishes(
        [
            __DIR__."/../../stubs/tests/Unit" => test_path("Unit"),
            __DIR__."/../../stubs/tests/Integration" => test_path("Integration"),
            __DIR__."/../../stubs/tests/Feature" => test_path("Feature"),
            __DIR__."/../../stubs/tests/Browser" => test_path("Browser"),

            __DIR__."/../../phpunit.xml" => base_path("phpunit.xml"),
            __DIR__."/../../stubs/tests/CreatesApplication.stub" => test_path("CreatesApplication.php"),
            __DIR__."/../../stubs/tests/TestCase.stub" => test_path("TestCase.php"),
            __DIR__."/../../stubs/tests/DuskTestCase.stub" => test_path("DuskTestCase.php"),
            __DIR__."/../../stubs/tests/TestIndexApi.stub" => test_path("Feature/IndexTest.php"),
            __DIR__."/../../stubs/tests/TestIndexWeb.stub" => test_path("Browser/IndexTest.php"),
        ],

        "tripteki-laravelphp-test");
    }
};