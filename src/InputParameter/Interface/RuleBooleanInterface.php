<?php

namespace LaravelCustomRequest\InputParameter\Interface;

/**
 * InputParameterのRuleBooleanトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface RuleBooleanInterface
{
    /**
     * パラメータが真偽値として扱える値であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function boolean(string $message = null): static;
}
