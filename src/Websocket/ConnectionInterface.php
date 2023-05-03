<?php

namespace RTC\Contracts\Websocket;

use RTC\Contracts\Enums\WSSenderType;

interface ConnectionInterface
{
    public function __construct(int $fd);

    /**
     * Send message to this connection
     *
     * @param string $event
     * @param mixed $data
     * @param array $meta
     * @param WSSenderType $senderType
     * @param string $senderId
     * @param int $status
     * @param string $statusText
     * @param int $opcode
     * @param int $flags
     * @return void
     */
    public function send(
        string       $event,
        mixed        $data,
        array        $meta = [],
        WSSenderType $senderType = WSSenderType::SERVER,
        string       $senderId = 'system',
        int          $status = 200,
        string       $statusText = 'success',
        int          $opcode = 1,
        int          $flags = SWOOLE_WEBSOCKET_FLAG_FIN
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

    /**
     * @param string $info
     * @return $this
     */
    public function attachInfo(string $info): static;
}