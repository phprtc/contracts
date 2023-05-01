<?php

namespace RTC\Contracts\Enums;

enum WSEvent: string
{
    case PING = 'ping';
    case PONG = 'pong';

    case EVENT_REJECTED = 'event_rejected';

    case JOIN = 'join';
    case JOINED = 'joined';
    case MESSAGE = 'message';
    case LEAVE = 'leave';
    case LEFT = 'left';
    case REMOVE = 'remove';
    case CREATE = 'create';

    case ATTACH_INFO = 'attach_info';
    case INFO_ATTACHED = 'info_attached';


    case USER_JOINED = 'user_joined';
    case USER_LEFT = 'user_left';
}
