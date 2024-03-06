<?php

namespace LaravelCustomRequest\InputParameter\Trait;

/**
 * InputParameterで使用する他のフィールドに関するバリデーションルールを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @property-read string $keyName
 * 
 * @method static addRuleAndMessage(string $ruleKey, string|null $message)
 * @method static addRuleValuesAndMessage(string $ruleKey, array<string|int>|string|int $values, string|null $message)
 */
trait RuleField
{
    /**
     * パラメータがfieldの値と一致することをバリデーションする
     * 
     * @param string $field
     * @param string|null $message
     * @return static
     */
    public function same(string $field, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("same", $field, $message);
    }

    /**
     * パラメータがfieldの値と一致しないことをバリデーションする
     * 
     * @param string $field
     * @param string|null $message
     * @return static
     */
    public function different(string $field, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("different", $field, $message);
    }

    /**
     * パラメータがfieldの値より大きいことをバリデーションする
     * 
     * @param string $field
     * @param string|null $message
     * @return static
     */
    public function gt(string $field, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("gt", $field, $message);
    }

    /**
     * パラメータがfieldの値以上であることをバリデーションする
     * 
     * @param string $field
     * @param string|null $message
     * @return static
     */
    public function gte(string $field, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("gte", $field, $message);
    }

    /**
     * パラメータがfieldの値より小さいことをバリデーションする
     * 
     * @param string $field
     * @param string|null $message
     * @return static
     */
    public function lt(string $field, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("lt", $field, $message);
    }

    /**
     * パラメータがfieldの値以下であることをバリデーションする
     * 
     * @param string $field
     * @param string|null $message
     * @return static
     */
    public function lte(string $field, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("lte", $field, $message);
    }

    /**
     * パラメータとして{field}_confirmationが存在し、パラメータがそれと一致することをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function confirmed(string $message = null): static
    {
        return $this->addRuleAndMessage("confirmed", $message);
    }

    /**
     * パラメータが1, true, "on", "yes" であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function accepted(string $message = null): static
    {
        return $this->addRuleAndMessage("accepted", $message);
    }

    /**
     * fieldの値がvalueと一致する場合、パラメータが1, true, "on", "yes" であることをバリデーションする
     * 
     * @param string $field
     * @param mixed $value
     * @param string|null $message
     * @return static
     */
    public function acceptedIf(string $field, mixed $value, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("accepted_if", [$field, $value], $message);
    }

    /**
     * パラメータが0, false, "off", "no" であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function declined(string $message = null): static
    {
        return $this->addRuleAndMessage("declined", $message);
    }

    /**
     * fieldの値がvalueと一致する場合、パラメータが0, false, "off", "no" であることをバリデーションする
     * 
     * @param string $field
     * @param mixed $value
     * @param string|null $message
     * @return static
     */
    public function declinedIf(string $field, mixed $value, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("declined_if", [$field, $value], $message);
    }
}
