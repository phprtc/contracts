<?php

namespace RTC\Contracts\Http;

use RTC\Contracts\Http\Router\CollectorInterface;
use Throwable;

interface HttpHandlerInterface
{
    public function handle(RequestInterface $request): void;

    /**
     * This method will be invoked when server instantiation is finished
     *
     * @return void
     * @throws Throwable
     */
    public function onReady(): void;

    public function setRouteCollector(CollectorInterface $collector): static;

    public function hasRouteCollector(): bool;

    public function getRouteCollector(): CollectorInterface;
}