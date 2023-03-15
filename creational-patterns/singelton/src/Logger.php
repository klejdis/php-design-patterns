<?php

class CustomLogger extends Singleton
{
    public static function log(string $message): void
    {
       $instance = self::getInstance();
       $instance->writte($message);
    }

    public function writte(string $message): void
    {
        echo $message;
    }
}