<?php

namespace RTC\Contracts\Enums;

enum WSEvent: string
{
    case PING = 'ping';
    case PONG = 'pong';

    case EVENT_REJECTED = 'event_rejected';

    case WELCOME = 'welcome';
    case CLOSE_CONNECTION = 'conn_close';

    case ROOM_JOIN = 'room_join';
    case ROOM_WELCOME = 'room_welcome';
    case ROOM_JOINED = 'room_joined';
    case ROOM_MESSAGE = 'room_message';
    case ROOM_LEAVE = 'room_leave';
    case ROOM_LEFT = 'room_left';
    case ROOM_REMOVE = 'room_remove';
    case ROOM_CREATE = 'room_create';

    case ATTACH_INFO = 'attach_info';
    case INFO_ATTACHED = 'info_attached';


    case USER_JOINED = 'user_joined';
    case USER_LEFT = 'user_left';
}
