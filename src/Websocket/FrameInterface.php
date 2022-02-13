<?php

namespace RTC\Contracts\Websocket;

use Swoole\WebSocket\Frame;

interface FrameInterface
{
    public function __construct(Frame $frame);

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

    /**
     * Returns json-decoded message array
     *
     * @return string
     */
    public function getRawMessage(): string;
}