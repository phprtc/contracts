<?php

namespace RTC\Contracts\Websocket;

use Swoole\Http\Server;
use Swoole\WebSocket\Frame;

interface WebsocketHandlerInterface
{
    public function handle(ConnectionInterface $connection, FrameInterface $frame): void;
}