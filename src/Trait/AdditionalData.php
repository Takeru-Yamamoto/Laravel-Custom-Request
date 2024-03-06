<?php

namespace LaravelCustomRequest\Trait;

use Illuminate\Support\Facades\Route;

/**
 * FormRequestで使用するvalidationData()にマージする追加データに関する処理を管理する
 * 
 * @package LaravelCustomRequest\Trait
 */
trait AdditionalData
{
    /**
     * クエリパラメータのキー名
     * 
     * @var array<string> 
     */
    protected array $queryParameters = [];


    /**
     * validationData()にマージする追加データを取得する
     * 
     * @return array<string, mixed>
     */
    protected function additionalData(): array
    {
        $additionalData = [];

        if (empty($this->queryParameters)) return $additionalData;

        foreach ($this->queryParameters as $queryParameter) {
            $additionalData[$queryParameter] = Route::input($queryParameter);
        }

        return $additionalData;
    }
}
