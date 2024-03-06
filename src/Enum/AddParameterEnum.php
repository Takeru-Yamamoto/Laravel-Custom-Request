<?php

namespace LaravelCustomRequest\Enum;

/**
 * ログに出力する際に追加するパラメータのEnum
 * 
 * @package LaravelCustomRequest\Enum
 */
enum AddParameterEnum: string
{
    case URL        = "url";
    case METHOD     = "method";
    case IP         = "ip";
    case USER_AGENT = "user_agent";
    case DATETIME   = "datetime";
}
