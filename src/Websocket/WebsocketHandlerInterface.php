<?php

namespace RTC\Contracts\Websocket;

use RTC\Server\Server;
use RTC\Websocket\Frame;
use Throwable;

interface WebsocketHandlerInterface
{
    public function __construct(Server $server);

    /**
     * Method that will be called when message is received
     *
     * @param ConnectionInterface $connection
     * @param Frame $frame
     * @return void
     * @throws Throwable
     */
    public function onMessage(ConnectionInterface $connection, Frame $frame): void;

    /**
     * Method that will be called when new connection is received
     *
     * @param ConnectionInterface $connection
     * @return void
     */
    public function onOpen(ConnectionInterface $connection): void;

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