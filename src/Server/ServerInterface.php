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

    public function exists(int $fd): bool;

    public function push(
        int    $fd,
        string $data,
        int    $opcode = 1,
        int    $flags = SWOOLE_WEBSOCKET_FLAG_FIN
    ): void;
}