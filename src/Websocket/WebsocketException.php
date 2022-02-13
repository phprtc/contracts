<?php

namespace RTC\Contracts\Websocket;

use RTC\Contracts\Exception;
use Throwable;

abstract class WebsocketException extends Exception
{
    abstract public static function throw(
        ConnectionInterface $connection,
        string              $message,
        int                 $code = 0,
        Throwable|null      $previous = null
    );

    abstract public function getConnection(): ConnectionInterface;
}