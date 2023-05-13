<?php

namespace RTC\Contracts\Websocket;

use HttpStatusCodes\StatusCode;
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
     * @param bool $notifyUsers
     * @param string|null $joinedMessage
     * @return $this
     */
    public function add(
        int|ConnectionInterface $connection,
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
     * @param string $event
     * @param mixed $message
     * @param array $meta
     * @param array $excludeIds
     * @param StatusCode $status
     * @return int
     */
    public function send(
        string     $event,
        mixed      $message,
        array      $meta = [],
        array      $excludeIds = [],
        StatusCode $status = StatusCode::OK,
    ): int;

    /**
     * @param ConnectionInterface $connection
     * @param string $event
     * @param mixed $message
     * @param array $meta
     * @param StatusCode $status
     * @param bool $isForwarding
     * @return int
     */
    public function sendAsClient(
        ConnectionInterface $connection,
        string              $event,
        mixed               $message,
        array               $meta = [],
        StatusCode          $status = StatusCode::OK,
        bool                $isForwarding = false,
    ): int;


    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getSize(): int;

    /**
     * @param bool $withInfo Include client attached info
     * @return array
     */
    public function listConnections(bool $withInfo = true): array;
}