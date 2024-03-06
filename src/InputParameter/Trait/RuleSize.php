<?php

namespace LaravelCustomRequest\InputParameter\Trait;

/**
 * InputParameterで使用する大きさに関するバリデーションルールを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @property-read string $keyName
 * 
 * @method static addRuleValuesAndMessage(string $ruleKey, array<string|int>|string|int $values, string|null $message)
 */
trait RuleSize
{
    /**
     * パラメータの大きさがsizeであることをバリデーションする
     * 
     * @param int $size
     * @param string|null $message
     * @return static
     */
    public function size(int $size, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("size", $size, $message);
    }

    /**
     * パラメータがmax以下であることをバリデーションする
     * 
     * @param int $max
     * @param string|null $message
     * @return static
     */
    public function max(int $max, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("max", $max, $message);
    }

    /**
     * パラメータがmin以上であることをバリデーションする
     * 
     * @param int $min
     * @param string|null $message
     * @return static
     */
    public function min(int $min, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("min", $min, $message);
    }

    /**
     * パラメータがmax以下かつmin以上であることをバリデーションする
     * 
     * @param int $min
     * @param int $max
     * @param string|null $message
     * @return static
     */
    public function between(int $min, int $max, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("between", [$min, $max], $message);
    }
}
