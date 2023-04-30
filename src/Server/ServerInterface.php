<?php

namespace RTC\Contracts\Server;

use Closure;
use RTC\Contracts\Enums\WSIntendedReceiver;
use RTC\Contracts\Websocket\RoomInterface;
use Swoole\Http\Server;

interface ServerInterface
{
    public function __construct(string $host, int $port, int $wsClientSize);

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

    public function sendWSMessage(
        int                $fd,
        string             $event,
        mixed              $data,
        WSIntendedReceiver $receiverType,
        string             $receiverId,
        array              $meta = [],
    ): void;

    public function createRoom(string $name, int $size): RoomInterface;

    public function roomExists(string $name): bool;

    public function getRoom(string $name): RoomInterface;

    public function attachRoom(RoomInterface $room): static;

    public static function get(): static;
}