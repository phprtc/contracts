<?php

namespace RTC\Contracts\Http;

use RTC\Contracts\Exception;
use Throwable;

abstract class HttpException extends Exception
{
    abstract public static function throw(
        RequestInterface $request,
        string           $message,
        int              $code = 0,
        Throwable|null   $previous = null
    );

    abstract public function getRequest(): RequestInterface;
}