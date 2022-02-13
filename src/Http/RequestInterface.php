<?php

namespace RTC\Contracts\Http;

use RTC\Contracts\Http\Router\DispatchResultInterface;

interface RequestInterface extends \Psr\Http\Message\RequestInterface
{
    public function initMiddleware(MiddlewareInterface ...$middlewares): void;

    public function getResponse(): ResponseInterface;

    public function getMiddleware(): RequestMiddlewareInterface;

    public function getRouteDispatchResult(): DispatchResultInterface;
}