<?php

namespace RTC\Contracts\Http\Router;

use FastRoute\RouteCollector;

interface CollectorInterface
{
    public function collectFile(string $filePath, array $routesInfo = []): static;

    public function collect(array $routesInfo = []): static;

    public function cache(string $cacheFile, bool $hasClosures = false): static;

    public function prefixDelimiter(string $delimiter): static;

    public function register(): static;

    public function getFastRouteCollector(bool $createNew = false): RouteCollector;

    public function getCollectedRoutes(): array;

    public function getCachedRoutes(): array;

    public function getFastRouteData(): array;

    public function isRegistered(): bool;

    public function route(string $routeName): RouteDataInterface|null;

    public function uri(string $routeName, array $routeParams = []): string|null;
}