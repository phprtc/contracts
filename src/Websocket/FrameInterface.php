<?php

namespace RTC\Contracts\Websocket;

use Swoole\WebSocket\Frame;

interface FrameInterface
{
    public function __construct(Frame $frame);

    /**
     * Returns message sent from client
     *
     * @return string
     */
    public function getRaw(): string;

    /**
     * Returns json-decoded client-sent message
     *
     * @return array
     */
    public function getDecoded(): array;

    /**
     * The ID of the WebSocket client connection, this can be used to push data to the client
     *
     * @return int
     */
    public function getFd(): int;

    /**
     * The opcode type of WebSocket data frame, type of data received
     *
     * @return int
     */
    public function getOpCode(): int;

    /**
     * Returns Swoole frame object
     *
     * @return Frame
     */
    public function getSwooleFrame(): Frame;

    /**
     * Returns time which the server receives this payload
     *
     * @return string
     */
    public function getServerTime(): string;

}