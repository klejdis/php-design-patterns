<?php

/**
 * LoggerManager class is the client class that uses the LoggerInterface
 * to log messages.And the logger class is the adaptee class that implements the
 * LoggerInterface and provides the implementation for the methods.
 * You can easily swap the logger class with any other class that implements the LoggerInterface.
 */
class LoggerManager implements LoggerInterface
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function error(string $message)
    {
        return $this->logger->error($message);
    }

    public function warning(string $message)
    {
        return $this->logger->warning($message);
    }

    public function info(string $message)
    {
        return $this->logger->info($message);
    }

}