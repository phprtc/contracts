<?php

namespace RTC\Contracts\SSS;

use RTC\Contracts\Server\ServerInterface;
use Swoole\Http\Request;
use Swoole\Http\Response;
use Throwable;

interface SSSHandlerInterface
{
    /**
     * This method will be invoked when server instantiation is finished
     */
    public function onReady(): void;

    /**
     * Method that will be called when new connection is received
     *
     * @param ConnectionInterface $connection
     * @param Request $request
     * @param Response $response
     * @return void
     */
    public function onOpen(ConnectionInterface $connection, Request $request, Response $response): void;

    /**
     * Message that will be called when connection is closed
     *
     * @param ConnectionInterface $connection
     * @return void
     */
    public function onClose(ConnectionInterface $connection): void;

    /**
     * Method that will be called when an error occurred
     *
     * @param ConnectionInterface $connection
     * @param Throwable $exception
     * @return void
     */
    public function onError(ConnectionInterface $connection, Throwable $exception): void;
}