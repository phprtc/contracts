<?php

namespace RTC\Contracts\Websocket;

interface KernelInterface
{
    /**
     * @return WebsocketHandlerInterface[]
     */
    public function getHandlers(): array;
}