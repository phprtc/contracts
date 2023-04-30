<?php

namespace RTC\Contracts\Enums;

enum WSIntendedReceiver: string
{
    case ROOM = 'room';
    case CLIENT = 'client';
    case SERVER = 'server';
}
