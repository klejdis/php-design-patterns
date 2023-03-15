<?php

class Logger implements LoggerInterface
{
    public function error(string $message)
    {
        echo $message;
    }

    public function warning(string $message)
    {
        echo $message;
    }

    public function info(string $message)
    {
        echo $message;
    }
}