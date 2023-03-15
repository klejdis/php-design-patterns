<?php

interface LoggerInterface{
    public function error(string $message);
    public function warning(string $message);
    public function info(string $message);
}