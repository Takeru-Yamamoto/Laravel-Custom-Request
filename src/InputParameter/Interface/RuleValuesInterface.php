<?php

namespace LaravelCustomRequest\InputParameter\Interface;

use Illuminate\Contracts\Support\Arrayable;

/**
 * InputParameterのRuleValuesトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface RuleValuesInterface
{
    /**
     * パラメータがvaluesのいずれかと一致することをバリデーションする
     * 
     * @param \Illuminate\Contracts\Support\Arrayable|array<mixed>|string $values
     * @param string|null $message
     * @return static
     */
    public function in(Arrayable|array|string $values, string $message = null): static;

    /**
     * パラメータがvaluesのいずれとも一致しないことをバリデーションする
     * 
     * @param \Illuminate\Contracts\Support\Arrayable|array<mixed>|string $values
     * @param string|null $message
     * @return static
     */
    public function notIn(Arrayable|array|string $values, string $message = null): static;

    /**
     * パラメータがvaluesのいずれかから始まることをバリデーションする
     * 
     * @param array<mixed>|string $values
     * @param string|null $message
     * @return static
     */
    public function startsWith(array|string $values, string $message = null): static;

    /**
     * パラメータがvaluesのいずれかから始まらないことをバリデーションする
     * 
     * @param array<mixed>|string $values
     * @param string|null $message
     * @return static
     */
    public function doesntStartWith(array|string $values, string $message = null): static;

    /**
     * パラメータがvaluesのいずれかで終わることをバリデーションする
     * 
     * @param array<mixed>|string $values
     * @param string|null $message
     * @return static
     */
    public function endsWith(array|string $values, string $message = null): static;

    /**
     * パラメータがvaluesのいずれとも終わらないことをバリデーションする
     * 
     * @param array<mixed>|string $values
     * @param string|null $message
     * @return static
     */
    public function doesntEndWith(array|string $values, string $message = null): static;
}
