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

    /**
     * @param int|ConnectionInterface $connection
     * @param array $metaData
     * @param bool $notifyUsers
     * @param string|null $joinedMessage
     * @return $this
     */
    public function add(
        int|ConnectionInterface $connection,
        array                   $metaData = [],
        bool                    $notifyUsers = true,
        ?string                 $joinedMessage = null,
    ): static;

    /**
     * @param int|ConnectionInterface $connection
     * @param bool $notifyUsers
     * @param string|null $leaveMessage
     * @return void
     */
    public function remove(
        int|ConnectionInterface $connection,
        bool                    $notifyUsers = true,
        ?string                 $leaveMessage = null
    ): void;

    /**
     * @return int
     */
    public function count(): int;

    /**
     * @param int|ConnectionInterface $connection
     * @return bool
     */
    public function has(int|ConnectionInterface $connection): bool;

    /**
     * @return void
     */
    public function removeAll(): void;

    /**
     * @return Table
     */
    public function getClients(): Table;

    /**
     * @param int|ConnectionInterface $connection
     * @return array|null
     */
    public function getMetaData(int|ConnectionInterface $connection): ?array;

    /**
     * @param string $event
     * @param mixed $message
     * @param array $meta
     * @param array $excludeIds
     * @return int
     */
    public function send(
        string $event,
        mixed  $message,
        array  $meta = [],
        array  $excludeIds = []
    ): int;

    /**
     * @param ConnectionInterface $connection
     * @param string $event
     * @param mixed $message
     * @param array $meta
     * @return int
     */
    public function sendAsClient(
        ConnectionInterface $connection,
        string              $event,
        mixed               $message,
        array               $meta = []
    ): int;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getSize(): int;
}