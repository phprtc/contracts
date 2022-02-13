<?php

namespace RTC\Contracts\Http;

use RTC\Contracts\Http\Router\DispatchResultInterface;

interface RequestInterface extends \Psr\Http\Message\RequestInterface
{
    public function initMiddleware(MiddlewareInterface ...$middlewares): void;

    public function getResponse(): ResponseInterface;

    public function getMiddleware(): RequestMiddlewareInterface;

    public function getRouteDispatchResult(): DispatchResultInterface;

    /**
     * This method will send error response to client
     * this should be used in try-catch statement
     *
     * @param callable $callback
     * @return void
     */
    public function handleException(callable $callback): void;
}