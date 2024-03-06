<?php

namespace LaravelCustomRequest\Trait;

use Illuminate\Auth\Access\AuthorizationException;

/**
 * FormRequestで使用するfailedAuthorizationメソッドに関する処理を管理する
 * 
 * @package LaravelCustomRequest\Trait
 */
trait FailedAuthorization
{
    /**
     * リクエストが認可されていない場合のメッセージ
     * 
     * @var string $unauthorizedMessage
     */
    protected string $unauthorizedMessage = "";

    /**
     * リクエストが認可されていない場合のメッセージのlangファイルのキー
     * 
     * @var string $unauthorizedMessageKey
     */
    protected string $unauthorizedMessageKey = "";


    /**
     * リクエストが認可されていない場合のExceptionを取得する
     * 
     * @return \Illuminate\Auth\Access\AuthorizationException
     */
    protected function getAuthorizationException(): AuthorizationException
    {
        return new AuthorizationException($this->getUnauthorizedMessage());
    }

    /**
     * リクエストが認可されていない場合のメッセージを取得する
     */
    protected function getUnauthorizedMessage(): ?string
    {
        // langファイルからメッセージを取得するためのキーを取得する
        $unauthorizedMessageKey = $this->unauthorizedMessageKey();

        // langファイルからメッセージを取得する
        $unauthorizedMessageFromLangFile = $this->unauthorizedMessageFromLangFile();

        // langファイルから取得したメッセージがキーと異なる場合は取得したメッセージを返す
        if ($unauthorizedMessageKey !== $unauthorizedMessageFromLangFile) return $unauthorizedMessageFromLangFile;

        // リクエストが認可されていない場合のメッセージを取得する
        $unauthorizedMessage = $this->unauthorizedMessage();

        // リクエストが認可されていない場合のメッセージが空の場合はnullを返す
        return empty($unauthorizedMessage) ? null : $unauthorizedMessage;
    }

    /**
     * リクエストが認可されていない場合のメッセージ
     * 
     * @return string
     */
    protected function unauthorizedMessage(): string
    {
        return empty($this->unauthorizedMessage) ? config("custom-request.unauthorized_message", "") : $this->unauthorizedMessage;
    }

    /**
     * リクエストが認可されていない場合のメッセージのlangファイルのキー
     * 
     * @return string
     */
    protected function unauthorizedMessageKey(): string
    {
        return empty($this->unauthorizedMessageKey) ? config("custom-request.unauthorized_message_key", "") : $this->unauthorizedMessageKey;
    }

    /**
     * langファイルから取得したリクエストが認可されていない場合のメッセージ
     * 
     * @return string
     */
    protected function unauthorizedMessageFromLangFile(): string
    {
        return __($this->unauthorizedMessageKey());
    }
}
