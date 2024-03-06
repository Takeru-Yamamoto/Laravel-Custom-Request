<?php

namespace LaravelCustomRequest\InputParameter\Interface;

/**
 * InputParameterのRuleNumericトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface RuleNumericInterface
{
    /**
     * パラメータが数値であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function numeric(string $message = null): static;

    /**
     * パラメータが整数であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function integer(string $message = null): static;

    /**
     * パラメータがnumの倍数であることをバリデーションする
     * 
     * @param int $num
     * @param string|null $message
     * @return static
     */
    public function multipleOf(int $num, string $message = null): static;

    /**
     * パラメータがmin以上max以下の小数点以下の桁数を持つことをバリデーションする
     * maxが省略された場合はminと同じ桁数を持つことをバリデーションする
     * 
     * @param int $min
     * @param int|null $max
     * @param string|null $message
     * @return static
     */
    public function decimal(int $min, int $max = null, string $message = null): static;

    /**
     * パラメータがmin以上max以下の桁数を持つことをバリデーションする
     * maxが省略された場合はminと同じ桁数を持つことをバリデーションする
     * 
     * @param int $min
     * @param int|null $max
     * @param string|null $message
     * @return static
     */
    public function digits(int $min, int $max = null, string $message = null): static;

    /**
     * パラメータの桁数がmax以下であることをバリデーションする
     * 
     * @param int $max
     * @param string|null $message
     * @return static
     */
    public function maxDigits(int $max, string $message = null): static;

    /**
     * パラメータの桁数がmin以上であることをバリデーションする
     * 
     * @param int $min
     * @param string|null $message
     * @return static
     */
    public function minDigits(int $min, string $message = null): static;
}
