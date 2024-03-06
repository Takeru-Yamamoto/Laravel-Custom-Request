<?php

namespace LaravelCustomRequest\Trait;

/**
 * FormRequestで使用するauthorizeメソッドに関する処理を管理する
 * 
 * @package LaravelCustomRequest\Trait
 */
trait Authorize
{
    /**
     * リクエストが認可されているか
     * 
     * @var bool $isAuthorized
     */
    protected bool $isAuthorized = true;


    /**
     * リクエストが認可されているか
     * 
     * @return bool
     */
    protected function isAuthorized(): bool
    {
        return $this->isAuthorized;
    }
}
