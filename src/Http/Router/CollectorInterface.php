<?php

namespace RTC\Contracts\Http\Router;

interface CollectorInterface
{
    public function collectFile(string $filePath, array $routesInfo = []): static;

    public function collect(array $routesInfo = []): static;

    public function cache(string $cacheFile, bool $hasClosures = false): static;

    public function prefixDelimiter(string $delimiter): static;

    public function register(): static;

    public function getFastRouteCollector(bool $createNew = false): object;
}