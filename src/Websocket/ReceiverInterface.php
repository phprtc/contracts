<?php

namespace RTC\Contracts\Websocket;

interface ReceiverInterface
{
    public function getType(): string;

    public function getId(): string;

    public function isValid(): bool;
}