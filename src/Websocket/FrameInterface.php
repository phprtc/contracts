<?php

namespace RTC\Contracts\Websocket;

use Swoole\WebSocket\Frame;

interface FrameInterface
{
    /**
     * Returns Swoole frame object
     *
     * @return Frame
     */
    public function getFrame(): Frame;

    /**
     * Returns json-decoded message array
     *
     * @return array
     */
    public function getMessage(): array;
}