<?php

if (! function_exists("test_path"))
{
    /**
     * @param string $path
     * @return string
     */
    function test_path($path = "")
    {
        return app()->basePath("tests/".$path);
    };
}