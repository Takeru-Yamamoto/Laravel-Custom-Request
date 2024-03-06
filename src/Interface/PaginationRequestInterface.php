<?php

namespace LaravelCustomRequest\Interface;

/**
 * BasePaginationRequestのInterface
 * 
 * @package LaravelCustomRequest\Interface
 */
interface PaginationRequestInterface
{
    /**
     * ページネーションに使用するページ番号を取得する
     * 
     * @return int
     */
    public function page(): int;

    /**
     * ページネーションのオフセットを取得する
     * 
     * @return int
     */
    public function offset(): int;

    /**
     * ページネーションの開始位置を取得する
     * 
     * @return int
     */
    public function start(int $default = 0): int;

    /**
     * ページネーションの終了位置を取得する
     * 
     * @param int $default
     * @return int
     */
    public function end(int $default = 0): int;
}
