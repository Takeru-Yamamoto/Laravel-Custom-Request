<?php

namespace LaravelCustomRequest\InputParameter\Trait;

use Illuminate\Validation\Rule as Rule;
use Illuminate\Contracts\Support\Arrayable;

/**
 * InputParameterで使用する値に関するバリデーションルールを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @property-read string $keyName
 * 
 * @method static addRuleValuesAndMessage(string $ruleKey, array<string|int>|string|int $values, string|null $message)
 * @method static addRuleObjectAndMessage(string $ruleKey, \Stringable $rule, string|null $message)
 */
trait RuleValues
{
    /**
     * パラメータがvaluesのいずれかと一致することをバリデーションする
     * 
     * @param \Illuminate\Contracts\Support\Arrayable|array<mixed>|string $values
     * @param string|null $message
     * @return static
     */
    public function in(Arrayable|array|string $values, string $message = null): static
    {
        return $this->addRuleObjectAndMessage("in", Rule::in($values), $message);
    }

    /**
     * パラメータがvaluesのいずれとも一致しないことをバリデーションする
     * 
     * @param \Illuminate\Contracts\Support\Arrayable|array<mixed>|string $values
     * @param string|null $message
     * @return static
     */
    public function notIn(Arrayable|array|string $values, string $message = null): static
    {
        return $this->addRuleObjectAndMessage("not_in", Rule::notIn($values), $message);
    }

    /**
     * パラメータがvaluesのいずれかから始まることをバリデーションする
     * 
     * @param array<mixed>|string $values
     * @param string|null $message
     * @return static
     */
    public function startsWith(array|string $values, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("starts_with", $values, $message);
    }

    /**
     * パラメータがvaluesのいずれかから始まらないことをバリデーションする
     * 
     * @param array<mixed>|string $values
     * @param string|null $message
     * @return static
     */
    public function doesntStartWith(array|string $values, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("doesnt_start_with", $values, $message);
    }

    /**
     * パラメータがvaluesのいずれかで終わることをバリデーションする
     * 
     * @param array<mixed>|string $values
     * @param string|null $message
     * @return static
     */
    public function endsWith(array|string $values, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("ends_with", $values, $message);
    }

    /**
     * パラメータがvaluesのいずれとも終わらないことをバリデーションする
     * 
     * @param array<mixed>|string $values
     * @param string|null $message
     * @return static
     */
    public function doesntEndWith(array|string $values, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("doesnt_end_with", $values, $message);
    }
}
