<?php

namespace RTC\Contracts\Enums;

enum WSDisconnectMode: string
{
    case CUSTOM = 'custom';
    case TIMEOUT = 'timeout';
    case SERVER_ERROR = 'server_error';
    case CLIENT_REQUEST = 'client_request';
}