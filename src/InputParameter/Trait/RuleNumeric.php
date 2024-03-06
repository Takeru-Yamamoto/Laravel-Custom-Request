<?php

namespace LaravelCustomRequest\InputParameter\Trait;

/**
 * InputParameterで使用する数値に関するバリデーションルールを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @method static addRuleAndMessage(string $ruleKey, string|null $message)
 * @method static addRuleValuesAndMessage(string $ruleKey, array<string|int>|string|int $values, string|null $message)
 */
trait RuleNumeric
{
    /**
     * パラメータが数値であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function numeric(string $message = null): static
    {
        return $this->addRuleAndMessage("numeric", $message);
    }

    /**
     * パラメータが整数であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function integer(string $message = null): static
    {
        return $this->addRuleAndMessage("integer", $message);
    }

    /**
     * パラメータがnumの倍数であることをバリデーションする
     * 
     * @param int $num
     * @param string|null $message
     * @return static
     */
    public function multipleOf(int $num, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("multiple_of", $num, $message);
    }

    /**
     * パラメータがmin以上max以下の小数点以下の桁数を持つことをバリデーションする
     * maxが省略された場合はminと同じ桁数を持つことをバリデーションする
     * 
     * @param int $min
     * @param int|null $max
     * @param string|null $message
     * @return static
     */
    public function decimal(int $min, int $max = null, string $message = null): static
    {
        return is_null($max)
            ? $this->addRuleValuesAndMessage("decimal", $min, $message)
            : $this->addRuleValuesAndMessage("decimal", [$min, $max], $message);
    }

    /**
     * パラメータがmin以上max以下の桁数を持つことをバリデーションする
     * maxが省略された場合はminと同じ桁数を持つことをバリデーションする
     * 
     * @param int $min
     * @param int|null $max
     * @param string|null $message
     * @return static
     */
    public function digits(int $min, int $max = null, string $message = null): static
    {
        return is_null($max)
        ? $this->addRuleValuesAndMessage("digits", $min, $message)
        : $this->addRuleValuesAndMessage("digits_between", [$min, $max], $message);
    }

    /**
     * パラメータの桁数がmax以下であることをバリデーションする
     * 
     * @param int $max
     * @param string|null $message
     * @return static
     */
    public function maxDigits(int $max, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("max_digits", $max, $message);
    }

    /**
     * パラメータの桁数がmin以上であることをバリデーションする
     * 
     * @param int $min
     * @param string|null $message
     * @return static
     */
    public function minDigits(int $min, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("min_digits", $min, $message);
    }
}
