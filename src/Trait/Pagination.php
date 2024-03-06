<?php

namespace LaravelCustomRequest\Trait;

use LaravelCustomRequest\InputParameter\Facade\InputParameter;

/**
 * BasePaginationRequestで使用するページネーションに関する処理を管理する
 * 
 * @package LaravelCustomRequest\Trait
 * 
 * @method array<\LaravelCustomRequest\InputParameter\Interface\InputParameterInterface> inputParameters()
 * @method int bindInt(string $key, int $default = 0)
 */
trait Pagination
{
    /**
     * クラスプロパティにInputParameterのインスタンスをバインドする処理
     * 
     * @return void
     */
    #[\Override]
    protected function setInputParameters(): void
    {
        $this->inputParameters = array_merge($this->inputParameters(), [
            InputParameter::filled("page")->integer(),
        ]);
    }

    /**
     * ページネーションに使用するページ番号のデフォルト値
     * 
     * @return int
     */
    protected function defaultPage(): int
    {
        return 1;
    }

    /**
     * ページネーションに使用する1ページの表示件数
     * 
     * @return int
     */
    protected function pageItemLimit(): int
    {
        return 10;
    }


    /**
     * ページネーションに使用するページ番号を取得する
     * 
     * @return int
     */
    public function page(): int
    {
        return $this->bindInt("page", $this->defaultPage());
    }

    /**
     * ページネーションのオフセットを取得する
     * 
     * @return int
     */
    public function offset(): int
    {
        return ($this->page() - 1) * $this->pageItemLimit();
    }

    /**
     * ページネーションの開始位置を取得する
     * 
     * @return int
     */
    public function start(int $default = 0): int
    {
        return $this->offset() + $default;
    }

    /**
     * ページネーションの終了位置を取得する
     * 
     * @param int $default
     * @return int
     */
    public function end(int $default = 0): int
    {
        return $this->start($default) + $this->pageItemLimit() - 1;
    }
}
