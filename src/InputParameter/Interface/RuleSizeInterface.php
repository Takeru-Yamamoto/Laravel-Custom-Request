<?php

namespace LaravelCustomRequest\InputParameter\Interface;

/**
 * InputParameterのRuleSizeトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface RuleSizeInterface
{
    /**
     * パラメータの大きさがsizeであることをバリデーションする
     * 
     * @param int $size
     * @param string|null $message
     * @return static
     */
    public function size(int $size, string $message = null): static;

    /**
     * パラメータがmax以下であることをバリデーションする
     * 
     * @param int $max
     * @param string|null $message
     * @return static
     */
    public function max(int $max, string $message = null): static;

    /**
     * パラメータがmin以上であることをバリデーションする
     * 
     * @param int $min
     * @param string|null $message
     * @return static
     */
    public function min(int $min, string $message = null): static;

    /**
     * パラメータがmax以下かつmin以上であることをバリデーションする
     * 
     * @param int $min
     * @param int $max
     * @param string|null $message
     * @return static
     */
    public function between(int $min, int $max, string $message = null): static;
}
