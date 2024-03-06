<?php

namespace LaravelCustomRequest\Trait;

/**
 * FormRequestで使用するvalidateResolvedメソッドに関する処理を管理する
 * 
 * @package LaravelCustomRequest\Trait
 */
trait ValidateResolved
{
    /**
     * validateResolvedメソッドの実行前に実行する処理
     * 
     * @return void
     */
    protected function prepareForValidateResolved(): void
    {
    }

    /**
     * validateResolvedメソッドの実行後に実行する処理
     * 
     * @return void
     */
    protected function passedValidateResolved(): void
    {
    }
}
