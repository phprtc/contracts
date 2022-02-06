<?php

namespace RTC\Contracts\Websocket;

interface ConnectionInterface
{
    /**
     * Send message to this connection
     *
     * @param string $command
     * @param mixed $data
     * @return void
     */
    public function send(string $command, mixed $data): void;

    /**
     * Close this connection
     *
     * @return void
     */
    public function close(): void;

    /**
     * Gets the connection unique identifier
     *
     * @return int
     */
    public function getIdentifier(): int;
}