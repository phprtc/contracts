<?php

namespace RTC\Contracts\Websocket;

use RTC\Server\Server;

interface ConnectionInterface
{
    public function __construct(Server $server, int $fd);

    /**
     * Send message to this connection
     *
     * @param string $command
     * @param mixed $data
     * @param int $opcode
     * @param int $flags
     * @return void
     */
    public function send(
        string $command,
        mixed  $data,
        int    $opcode = 1,
        int    $flags = SWOOLE_WEBSOCKET_FLAG_FIN
    ): void;

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