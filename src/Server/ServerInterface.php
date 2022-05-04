<?php

namespace RTC\Contracts\Server;

use Closure;
use Swoole\Http\Server;

interface ServerInterface
{
    public function __construct(string $host, int $port);

    public function getServer(): Server;

    public function onStart(Closure $callback): static;

    public function run(): void;

    public function set(array $settings): static;
}