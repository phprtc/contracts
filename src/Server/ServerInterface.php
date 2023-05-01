<?php

namespace RTC\Contracts\Server;

use Closure;
use RTC\Contracts\Enums\WSIntendedReceiver;
use RTC\Contracts\Enums\WSSenderType;
use RTC\Contracts\Websocket\ConnectionInterface;
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
        WSSenderType       $senderType,
        string             $senderId,
        WSIntendedReceiver $receiverType,
        string             $receiverId,
        array              $meta = [],
        int                $opcode = 1,
        int                $flags = SWOOLE_WEBSOCKET_FLAG_FIN
    ): void;

    public function createRoom(string $name, int $size): RoomInterface;

    public function roomExists(string $name): bool;

    public function getRoom(string $name): RoomInterface;

    public function attachRoom(RoomInterface $room): static;

    public function attachConnectionInfo(int|ConnectionInterface $connection, string $info): static;
    public function getConnectionInfo(int|ConnectionInterface $connection): ?string;

    public static function get(): static;
}