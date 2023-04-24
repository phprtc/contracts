<?php

namespace RTC\Contracts\Websocket;

use Throwable;

interface WebsocketHandlerInterface
{
    /**
     * This method will be invoked when server instantiation is finished
     */
    public function onReady(): void;

    /**
     * Method that will be called when message is received
     *
     * @param ConnectionInterface $connection
     * @param FrameInterface $frame
     * @return void
     */
    public function onMessage(ConnectionInterface $connection, FrameInterface $frame): void;

    /**
     * Method that will be called when command-oriented message is received
     *
     * @param ConnectionInterface $connection
     * @param EventInterface $command
     * @return void
     */
    public function onCommand(ConnectionInterface $connection, EventInterface $command): void;

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