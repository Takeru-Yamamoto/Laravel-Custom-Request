<?php

namespace LaravelCustomRequest\InputParameter\Trait;

/**
 * InputParameterで使用する正規表現に関するバリデーションルールを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @property-read string $keyName
 * 
 * @method static addRuleValuesAndMessage(string $ruleKey, array<string|int>|string|int $values, string|null $message)
 */
trait RuleRegex
{
    /**
     * パラメータがpatternに一致するかをバリデーションする
     * 
     * @param string $pattern
     * @param string|null $message
     * @return static
     */
    public function regex(string $pattern, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("regex", $pattern, $message);
    }

    /**
     * パラメータがpatternに一致しないかをバリデーションする
     * 
     * @param string $pattern
     * @param string|null $message
     * @return static
     */
    public function notRegex(string $pattern, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("not_regex", $pattern, $message);
    }



    /*----------------------------------------*
     * Additional Rules
     *----------------------------------------*/

    /**
     * パラメータが電話番号の形式かをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function tel(string $message = null): static
    {
        return $this->regex("/^[0-9]{2,3}-[0-9]{3,4}-[0-9]{4}$/", $message);
    }

    /**
     * パラメータが郵便番号の形式かをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function postCode(string $message = null): static
    {
        return $this->regex("/^[0-9]{3}-[0-9]{4}$/", $message);
    }
}
