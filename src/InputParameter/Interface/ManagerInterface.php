<?php

namespace LaravelCustomRequest\InputParameter\Interface;

use LaravelCustomRequest\InputParameter\Interface\InputParameterInterface;

/**
 * InputParameterのManagerのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface ManagerInterface
{
    /**
     * InputParameterのインスタンスを生成する
     *
     * @param string $keyName
     * @return \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface
     */
    public function make(string $keyName): InputParameterInterface;
}
