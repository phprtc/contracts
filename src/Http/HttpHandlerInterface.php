<?php

namespace RTC\Contracts\Http;

use QuickRoute\Router\Collector;

interface HttpHandlerInterface
{
    public function handle(RequestInterface $request): void;

    public function setRouteCollector(Collector $collector): static;

    public function hasRouteCollector(): bool;

    public function getRouteCollector(): Collector;
}