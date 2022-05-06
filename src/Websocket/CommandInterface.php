<?php

namespace RTC\Contracts\Websocket;

use Swoole\WebSocket\Frame;

interface CommandInterface
{
    public function __construct(Frame $frame, array $decodedMessage = []);

    /**
     * Gets message sent from client
     *
     * @return mixed
     */
    public function getMessage(): mixed;

    /**
     * Returns command name sent by client
     *
     * @return string
     */
    public function getCommand(): string;

    /**
     * Returns payload-sent time
     *
     * @return string
     */
    public function getTime(): string;

    /**
     * Returns json-decoded message array
     *
     * @return FrameInterface
     */
    public function getFrame(): FrameInterface;
}