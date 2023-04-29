<?php

namespace RTC\Contracts\Websocket;

use RTC\Contracts\Server\ServerInterface;
use Swoole\Table;

interface RoomInterface
{
    public function __construct(
        ServerInterface $server,
        string          $name,
        int             $size = 1000
    );

    public function add(
        int|ConnectionInterface $connection,
        array                   $metaData = [],
        bool                    $notifyUsers = true,
        ?string                 $joinedMessage = null,
    ): static;

    public function remove(
        int|ConnectionInterface $connection,
        bool                    $notifyUsers = true,
        ?string                 $leaveMessage = null
    ): void;

    public function count(): int;

    public function has(int|ConnectionInterface $connection): bool;

    public function removeAll(): void;

    public function getClients(): Table;

    public function getMetaData(int|ConnectionInterface $connection): ?array;

    public function send(
        string $event,
        mixed  $message,
        array  $meta = [],
        array  $excludeIds = []
    ): int;

    public function sendAsClient(
        ConnectionInterface $connection,
        string              $event,
        mixed               $message,
        array               $meta = []
    ): int;
}