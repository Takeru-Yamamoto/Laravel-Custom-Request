<?php

namespace LaravelCustomRequest\InputParameter\Trait;

use Stringable;

/**
 * InputParameterのプロパティを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @property-read string $keyName
 */
trait Property
{
    /**
     * パラメータの属性名
     * 
     * @var ?string
     */
    protected ?string $attributeName = null;

    /**
     * パラメータのバリデーションルール
     * 
     * @var array<\Stringable|array<mixed>|string>
     */
    protected array $rules = [];

    /**
     * パラメータのバリデーションメッセージ
     * 
     * @var array<string, string>
     */
    protected array $messages = [];


    /*----------------------------------------*
     * Attribute
     *----------------------------------------*/

    /**
     * パラメータの属性名を設定する
     * 
     * @param string $attributeName
     * @return static
     */
    public function setAttributeName(string $attributeName): static
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * パラメータの属性名を取得する
     * 
     * @return ?string
     */
    public function getAttributeName(): ?string
    {
        return __($this->attributeName);
    }



    /*----------------------------------------*
     * Rules
     *----------------------------------------*/

    /**
     * パラメータのバリデーションルールを設定する
     * 
     * @param array<\Stringable|array<mixed>|string> $rules
     * @return static
     */
    public function setRules(array $rules): static
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * パラメータのバリデーションルールをマージする
     * 
     * @param array<\Stringable|array<mixed>|string> $rules
     * @return static
     */
    public function mergeRules(array $rules): static
    {
        $this->rules = array_merge($this->rules, $rules);

        return $this;
    }

    /**
     * パラメータのバリデーションルールを追加する
     * 
     * @param \Stringable|array<mixed>|string $rule
     * @return static
     */
    public function addRule(Stringable|array|string $rule): static
    {
        $this->rules[] = $rule;

        return $this;
    }

    /**
     * 複数の範囲を持つパラメータのバリデーションルールを追加する
     * 
     * @param string $ruleName
     * @param array<mixed> $values
     * @return static
     */
    public function addRuleValues(string $ruleName, array ...$values): static
    {
        $values = implode(",", $values);

        return $this->addRule("{$ruleName}:{$values}");
    }

    /**
     * パラメータのバリデーションルールを取得する
     * 
     * @return array<\Stringable|array<mixed>|string>
     */
    public function getRules(): array
    {
        return $this->rules;
    }



    /*----------------------------------------*
     * Messages
     *----------------------------------------*/

    /**
     * パラメータのバリデーションメッセージを設定する
     * 
     * @param array<string, string> $messages
     * @return static
     */
    public function setMessages(array $messages): static
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * パラメータのバリデーションメッセージをマージする
     * 
     * @param array<string, string> $messages
     * @return static
     */
    public function mergeMessages(array $messages): static
    {
        $this->messages = array_merge($this->messages, $messages);

        return $this;
    }

    /**
     * パラメータのバリデーションメッセージを追加する
     * 
     * @param string $ruleKey
     * @param string $message
     * @return static
     */
    public function addMessage(string $ruleKey, string $message): static
    {
        $messageKey = "{$this->keyName}.{$ruleKey}";

        $this->messages[$messageKey] = $message;

        return $this;
    }

    /**
     * パラメータのバリデーションメッセージを取得する
     * 
     * @return array<string, string>
     */
    public function getMessages(): array
    {
        return $this->messages;
    }



    /*----------------------------------------*
     * Batch Process
     *----------------------------------------*/

    /**
     * パラメータのバリデーションルールを追加する
     * パラメータのバリデーションメッセージを追加する
     * 
     * @param string $ruleKey
     * @param string|null $message
     * @return static
     */
    protected function addRuleAndMessage(string $ruleKey, string $message = null): static
    {
        $this->addRule($ruleKey);

        if (!is_null($message)) $this->addMessage($ruleKey, $message);

        return $this;
    }

    /**
     * 複数の範囲を持つパラメータのバリデーションルールを追加する
     * パラメータのバリデーションメッセージを追加する
     * 
     * @param string $ruleKey
     * @param array<string|int>|string|int $values
     * @param string|null $message
     * @return static
     */
    protected function addRuleValuesAndMessage(string $ruleKey, array|string|int $values, string $message = null): static
    {
        // $valuesが文字列かつ空文字でない場合、配列に変換する
        if (is_string($values) && $values !== "") $values = [$values];

        // $valuesが数値の場合、配列に変換する
        if (is_numeric($values)) $values = [$values];

        $this->addRuleValues($ruleKey, ...$values);

        if (!is_null($message)) $this->addMessage($ruleKey, $message);

        return $this;
    }

    /**
     * Ruleインターフェースを継承したバリデーションルールを追加する
     * パラメータのバリデーションメッセージを追加する
     * 
     * @param string $ruleKey
     * @param \Stringable $rule
     * @param string|null $message
     * @return static
     */
    protected function addRuleObjectAndMessage(string $ruleKey, Stringable $rule, string $message = null): static
    {
        $this->addRule($rule);

        if (!is_null($message)) $this->addMessage($ruleKey, $message);

        return $this;
    }
}
