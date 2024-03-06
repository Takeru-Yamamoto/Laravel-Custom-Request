<?php

namespace LaravelCustomRequest\InputParameter\Interface;

/**
 * InputParameterのConstructorトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface ConstructorInterface
{
    /**
     * パラメータのキー名を取得する
     * 
     * @return string
     */
    public function getKeyName(): string;
}
