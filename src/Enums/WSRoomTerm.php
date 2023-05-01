<?php

namespace RTC\Contracts\Enums;

enum WSRoomTerm: string
{
    case JOIN = 'join';
    case JOINED = 'joined';
    case MESSAGE = 'message';
    case LEAVE = 'leave';
    case LEFT = 'left';
    case REMOVE = 'remove';
    case CREATE = 'create';

    case ATTACH_INFO = 'attach_info';


    case USER_JOINED = 'user_joined';
    case USER_LEFT = 'user_left';
}
