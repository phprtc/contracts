<?php

namespace RTC\Contracts\Http;

use RTC\Contracts\Http\Router\CollectorInterface;

interface HttpHandlerInterface
{
    public function handle(RequestInterface $request): void;

    public function setRouteCollector(CollectorInterface $collector): static;

    public function hasRouteCollector(): bool;

    public function getRouteCollector(): CollectorInterface;
}