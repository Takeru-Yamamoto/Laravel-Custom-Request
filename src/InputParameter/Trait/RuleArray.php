<?php

namespace LaravelCustomRequest\InputParameter\Trait;

/**
 * InputParameterで使用する配列に関するバリデーションルールを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @method static addRuleAndMessage(string $ruleKey, string|null $message)
 * @method static addRuleValuesAndMessage(string $ruleKey, array<string|int>|string|int $values, string|null $message)
 */
trait RuleArray
{
    /**
     * パラメータが配列であることをバリデーションする
     * acceptKeysが指定されている場合、配列のキーが指定されたもののみであることをバリデーションする
     * 
     * @param array<string>|string|null $acceptKeys
     * @param string|null $message
     * @return static
     */
    public function array(array|string|null $acceptKeys = null, string $message = null): static
    {
        return empty($acceptKeys)
            ? $this->addRuleAndMessage("array", $message)
            : $this->addRuleValuesAndMessage("array", $acceptKeys, $message);
    }

    /**
     * パラメータが配列であり、keysに指定されたキーを持つことをバリデーションする
     * 
     * @param array<string>|string $keys
     * @param string|null $message
     * @return static
     */
    public function requiredArrayKeys(array|string $keys, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("required_array_keys", $keys, $message);
    }

    /**
     * パラメータがfieldの持つ値のいずれかであることをバリデーションする
     * 
     * @param string $field
     * @param string $key
     * @param string|null $message
     * @return static
     */
    public function inArray(string $field, string $key, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("in_array", [$field, $key], $message);
    }

    /**
     * パラメータが配列であり、重複した値を持たないことをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function distinct(string $message = null): static
    {
        return $this->addRuleAndMessage("distinct", $message);
    }

    /**
     * パラメータが配列であり、重複した値を持たないことを厳密にバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function distinctStrict(string $message = null): static
    {
        return $this->addRuleValuesAndMessage("distinct", "strict", $message);
    }

    /**
     * パラメータが配列であり、重複した値を持たないことを大文字小文字を区別せずにバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function distinctIgnoreCase(string $message = null): static
    {
        return $this->addRuleValuesAndMessage("distinct", "ignore_case", $message);
    }
}
