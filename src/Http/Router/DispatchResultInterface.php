<?php

namespace RTC\Contracts\Http\Router;

interface DispatchResultInterface
{
    public function isFound(): bool;

    public function isNotFound(): bool;

    public function isMethodNotAllowed(): bool;

    public function getUrlParameters(): array|null;

    public function getCollector(): CollectorInterface;

    public function getRoute(): RouteDataInterface;
}