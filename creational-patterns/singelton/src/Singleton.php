<?php

class Singleton
{
    private static $instance;

    //constructor is private to prevent creating a new instance of the class via the new operator from outside this class
    private function __construct()
    {
    }

    //object is created from within the class itself only if the class has no instance.
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}