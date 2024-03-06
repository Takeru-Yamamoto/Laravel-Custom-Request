<?php

namespace LaravelCustomRequest\InputParameter\Interface;

/**
 * InputParameterのRuleFieldトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface RuleFieldInterface
{
    /**
     * パラメータがfieldの値と一致することをバリデーションする
     * 
     * @param string $field
     * @param string|null $message
     * @return static
     */
    public function same(string $field, string $message = null): static;

    /**
     * パラメータがfieldの値と一致しないことをバリデーションする
     * 
     * @param string $field
     * @param string|null $message
     * @return static
     */
    public function different(string $field, string $message = null): static;

    /**
     * パラメータがfieldの値より大きいことをバリデーションする
     * 
     * @param string $field
     * @param string|null $message
     * @return static
     */
    public function gt(string $field, string $message = null): static;

    /**
     * パラメータがfieldの値以上であることをバリデーションする
     * 
     * @param string $field
     * @param string|null $message
     * @return static
     */
    public function gte(string $field, string $message = null): static;

    /**
     * パラメータがfieldの値より小さいことをバリデーションする
     * 
     * @param string $field
     * @param string|null $message
     * @return static
     */
    public function lt(string $field, string $message = null): static;

    /**
     * パラメータがfieldの値以下であることをバリデーションする
     * 
     * @param string $field
     * @param string|null $message
     * @return static
     */
    public function lte(string $field, string $message = null): static;

    /**
     * パラメータとして{field}_confirmationが存在し、パラメータがそれと一致することをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function confirmed(string $message = null): static;

    /**
     * パラメータが1, true, "on", "yes" であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function accepted(string $message = null): static;

    /**
     * fieldの値がvalueと一致する場合、パラメータが1, true, "on", "yes" であることをバリデーションする
     * 
     * @param string $field
     * @param mixed $value
     * @param string|null $message
     * @return static
     */
    public function acceptedIf(string $field, mixed $value, string $message = null): static;

    /**
     * パラメータが0, false, "off", "no" であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function declined(string $message = null): static;

    /**
     * fieldの値がvalueと一致する場合、パラメータが0, false, "off", "no" であることをバリデーションする
     * 
     * @param string $field
     * @param mixed $value
     * @param string|null $message
     * @return static
     */
    public function declinedIf(string $field, mixed $value, string $message = null): static;
}
