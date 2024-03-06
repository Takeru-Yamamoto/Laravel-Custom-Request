<?php

namespace LaravelCustomRequest\InputParameter\Interface;

use Stringable;

/**
 * InputParameterのPropertyトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface PropertyInterface
{
    /**
     * パラメータの属性名を設定する
     * 
     * @param string $attributeName
     * @return static
     */
    public function setAttributeName(string $attributeName): static;

    /**
     * バリデーションの属性名を取得する
     * 
     * @return ?string
     */
    public function getAttributeName(): ?string;

    /**
     * パラメータのバリデーションルールを設定する
     * 
     * @param array<\Stringable|array<mixed>|string> $rules
     * @return static
     */
    public function setRules(array $rules): static;

    /**
     * パラメータのバリデーションルールをマージする
     * 
     * @param array<\Stringable|array<mixed>|string> $rules
     * @return static
     */
    public function mergeRules(array $rules): static;

    /**
     * パラメータのバリデーションルールを追加する
     * 
     * @param \Stringable|array<mixed>|string $rule
     * @return static
     */
    public function addRule(Stringable|array|string $rule): static;

    /**
     * 複数の範囲を持つパラメータのバリデーションルールを追加する
     * 
     * @param string $ruleName
     * @param array<mixed> $values
     * @return static
     */
    public function addRuleValues(string $ruleName, array $values): static;

    /**
     * バリデーションのルールを取得する
     * 
     * @return array<\Stringable|array<mixed>|string>
     */
    public function getRules(): array;

    /**
     * パラメータのバリデーションメッセージを設定する
     * 
     * @param array<string, string> $messages
     * @return static
     */
    public function setMessages(array $messages): static;

    /**
     * パラメータのバリデーションメッセージをマージする
     * 
     * @param array<string, string> $messages
     * @return static
     */
    public function mergeMessages(array $messages): static;

    /**
     * パラメータのバリデーションメッセージを追加する
     * 
     * @param string $ruleKey
     * @param string $message
     * @return static
     */
    public function addMessage(string $ruleKey, string $message): static;

    /**
     * バリデーションで使用するメッセージを取得する
     * 
     * @return array<string, string>
     */
    public function getMessages(): array;
}
