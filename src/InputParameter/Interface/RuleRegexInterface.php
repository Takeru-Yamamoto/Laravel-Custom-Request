<?php

namespace LaravelCustomRequest\InputParameter\Interface;

/**
 * InputParameterのRuleRegexトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface RuleRegexInterface
{
    /**
     * パラメータがpatternに一致するかをバリデーションする
     * 
     * @param string $pattern
     * @param string|null $message
     * @return static
     */
    public function regex(string $pattern, string $message = null): static;

    /**
     * パラメータがpatternに一致しないかをバリデーションする
     * 
     * @param string $pattern
     * @param string|null $message
     * @return static
     */
    public function notRegex(string $pattern, string $message = null): static;

    /**
     * パラメータが電話番号の形式かをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function tel(string $message = null): static;

    /**
     * パラメータが郵便番号の形式かをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function postCode(string $message = null): static;
}
