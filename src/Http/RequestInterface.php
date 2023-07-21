<?php

namespace RTC\Contracts\Http;

use RTC\Contracts\Http\Router\CollectorInterface;
use RTC\Contracts\Http\Router\DispatchResultInterface;
use RTC\Contracts\Server\ServerInterface;
use Throwable;

interface RequestInterface extends \Psr\Http\Message\RequestInterface
{
    public function initMiddleware(MiddlewareInterface ...$middlewares): void;

    public function getResponse(): ResponseInterface;

    public function getMiddleware(): RequestMiddlewareInterface;

    public function getRouteDispatchResult(): DispatchResultInterface;

    public function getKernel(): KernelInterface;

    public function getServer(): ServerInterface;

    public function getRouteCollector(): CollectorInterface;

    public function hasRouteCollector(): bool;

    /**
     * This method will send error response to client
     * this should be used in try-catch statement
     *
     * @param Throwable $exception
     * @return void
     */
    public function handleException(Throwable $exception): void;
}