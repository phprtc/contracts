<?php

namespace RTC\Contracts\Websocket;

use Swoole\WebSocket\Frame;

interface PayloadInterface
{
    public function __construct(Frame $frame);

    /**
     * Returns payload sent from client
     *
     * @return string
     */
    public function getRaw(): string;

    /**
     * Returns json-decoded client-sent payload
     *
     * @return array
     */
    public function getDecoded(): array;

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