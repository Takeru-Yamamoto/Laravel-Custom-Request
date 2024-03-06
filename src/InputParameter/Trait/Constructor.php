<?php

namespace LaravelCustomRequest\InputParameter\Trait;

/**
 * InputParameterのコンストラクタを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 */
trait Constructor
{
    /**
     * パラメータのキー名
     *
     * @var string
     */
    protected string $keyName;


    /**
     * コンストラクタ
     * パラメータのキー名を設定する
     * 
     * @param string $keyName
     * @throws \RuntimeException
     */
    function __construct(string $keyName)
    {
        // keyNameが空文字の場合は例外をスローする
        if (empty($keyName)) throw new \RuntimeException("keyName cannot be empty.");

        $this->keyName = $keyName;
    }

    /**
     * パラメータのキー名を取得する
     * 
     * @return string
     */
    public function getKeyName(): string
    {
        return $this->keyName;
    }
}
