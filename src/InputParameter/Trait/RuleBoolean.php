<?php

namespace LaravelCustomRequest\InputParameter\Trait;

/**
 * InputParameterで使用する真偽値に関するバリデーションルールを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @method static addRuleAndMessage(string $ruleKey, string|null $message)
 */
trait RuleBoolean
{
    /**
     * パラメータが真偽値として扱える値であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function boolean(string $message = null): static
    {
        return $this->addRuleAndMessage("boolean", $message);
    }
}
