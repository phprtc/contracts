<?php

namespace RTC\Contracts\Websocket;

use Swoole\WebSocket\Frame;

interface CommandInterface
{
    public function __construct(Frame $frame);

    /**
     * Gets message sent from client
     *
     * @return mixed
     */
    public function getMessage(): mixed;

    /**
     * Returns command name sent by client
     *
     * @return string|null
     */
    public function getCommand(): string|null;

    /**
     * Returns payload-sent time
     *
     * @return string|null
     */
    public function getTime(): string|null;

    /**
     * Returns json-decoded message array
     *
     * @return FrameInterface
     */
    public function getPayload(): FrameInterface;
}