<?php

namespace RTC\Contracts\Enums;

enum WSSenderType
{
    case USER;
    case SYSTEM;

    public function getValue(): string
    {
        return match ($this) {
            self::USER => 'user',
            self::SYSTEM => 'system'
        };
    }
}
