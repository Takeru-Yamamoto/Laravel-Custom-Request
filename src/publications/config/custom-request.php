<?php

return [
    /**
     * Failed Authorization
     * 
     * リクエストが認可されていない場合のメッセージ
     * 
     * unauthorized_message    : string リクエストが認可されていない場合のメッセージ
     * unauthorized_message_key: string リクエストが認可されていない場合のメッセージのlangファイルのキー
     */
    "unauthorized_message"     => env("CUSTOM_REQUEST_UNAUTHORIZED_MESSAGE", ""),
    "unauthorized_message_key" => env("CUSTOM_REQUEST_UNAUTHORIZED_MESSAGE_KEY", ""),

    /**
     * Logging
     * 
     * 受け取ったパラメータをログに出力するか
     * 
     * logging_parameters  : bool 受け取ったままのパラメータをログに出力するか
     * logging_directly    : string ログの出力先ディレクトリ
     * log_format          : string ログのフォーマット
     * log_parameter_format: string ログに出力するパラメータのフォーマット
     * mask_string         : string ログに出力する際にマスクする文字列
     * masked_parameters   : array<string> ログに出力する際にマスクするパラメータ
     * add_parameters      : array<string> ログに出力する際に追加するパラメータ
     */
    "logging_parameters"   => env("CUSTOM_REQUEST_LOGGING_PARAMETERS", false),
    "logging_directly"     => env("CUSTOM_REQUEST_LOGGING_DIRECTLY", "custom-request"),
    "log_format"           => env("CUSTOM_REQUEST_LOG_FORMAT", "%message%"),
    "log_parameter_format" => env("CUSTOM_REQUEST_LOG_PARAMETER_FORMAT", ""),
    "mask_string"          => env("CUSTOM_REQUEST_MASK_STRING", "********"),
    "masked_parameters"    => [],
    "add_parameters"       => [],
];
