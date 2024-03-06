<?php

namespace LaravelCustomRequest\Trait;

/**
 * FormRequestでバリデーションに使用するメソッドに関する処理を管理する
 * 
 * @package LaravelCustomRequest\Trait
 */
trait InputParameter
{
    /**
     * InputParameterのインスタンスの配列
     * 
     * @var array<\LaravelCustomRequest\InputParameter\Interface\InputParameterInterface>
     */
    protected array $inputParameters = [];


    /**
     * InputParameterのインスタンスの配列を定義する
     * 
     * @return array<\LaravelCustomRequest\InputParameter\Interface\InputParameterInterface>
     */
    abstract protected function inputParameters(): array;

    /**
     * クラスプロパティにInputParameterのインスタンスをバインドする処理
     * 
     * @return void
     */
    protected function setInputParameters(): void
    {
        $this->inputParameters = $this->inputParameters();
    }

    /**
     * バリデーションのルールを取得する
     * 
     * @return array<string, \Stringable|array<mixed>|string>
     */
    protected function getRules(): array
    {
        $rules = [];

        foreach ($this->inputParameters as $inputParameter) {
            $inputParameterRules = $inputParameter->getRules();

            // inputParameterが空の場合はスキップする
            if (empty($inputParameterRules)) continue;

            $rules = array_merge($rules, [$inputParameter->getKeyName() => $inputParameterRules]);
        }

        return $rules;
    }

    /**
     * バリデーションで使用するメッセージを取得する
     * 
     * @return array<string, string>
     */
    protected function getMessages(): array
    {
        $messages = [];

        foreach ($this->inputParameters as $inputParameter) {
            $inputParameterMessages = $inputParameter->getMessages();

            // inputParameterが空の場合はスキップする
            if (empty($inputParameterMessages)) continue;

            $messages = array_merge($messages, $inputParameterMessages);
        }

        return $messages;
    }

    /**
     * バリデーションの属性名を取得する
     * 
     * @return array<string, string>
     */
    protected function getAttributes(): array
    {
        $attributes = [];

        foreach ($this->inputParameters as $inputParameter) {
            $attributeName = $inputParameter->getAttributeName();

            // attributeNameが空の場合はスキップする
            if (empty($attributeName)) continue;

            $attributes = array_merge($attributes, [$inputParameter->getKeyName() => $attributeName]);
        }

        return $attributes;
    }
}
