<?php

namespace LaravelCustomRequest\Trait;

use LaravelCustomRequest\Enum\AddParameterEnum;

use SimpleLogger\Laravel\Facade\Logger as LoggerFacade;
use SimpleLogger\Laravel\Logger;

/**
 * FormRequestで受け取ったパラメータをログに出力する処理を管理する
 * 
 * @package LaravelCustomRequest\Trait
 * 
 * @method array validationData()
 */
trait LoggingParameters
{
    /**
     * 受け取ったパラメータをログに出力するか
     * 
     * @var bool $isLoggingParameters
     */
    protected bool $isLoggingParameters = false;


    /**
     * 受け取ったパラメータをログに出力するかを取得する
     * 
     * @return bool
     */
    protected function isLoggingParameters(): bool
    {
        if ($this->isLoggingParameters) return true;

        return config("custom-request.logging_parameters", false);
    }

    /**
     * 受け取ったパラメータをログに出力する処理
     * 
     * @return void
     */
    protected function loggingParameters(): void
    {
        if (!$this->isLoggingParameters()) return;

        // 受け取ったパラメータを取得する
        $parameters = $this->validationData();

        // 受け取ったパラメータに指定されたパラメータを追加する
        $parameters = $this->addParameters($parameters);

        // 受け取ったパラメータをマスクする
        $parameters = $this->maskParameters($parameters);

        // Loggerインスタンスを取得する
        $logger = $this->getLogger();

        // Loggerにパラメータを追加する
        $logger->add(json_encode($parameters, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

        // ログを出力する
        $logger->logging();
    }

    /**
     * 受け取ったパラメータに指定されたパラメータを追加する処理
     * 
     * @param array<string, mixed> $parameters
     * @return array<string, mixed>
     */
    protected function addParameters(array $parameters): array
    {
        // 追加するパラメータを取得する
        $addParameters = config("custom-request.add_parameters", []);

        // 追加するパラメータがない場合はそのまま返す
        if (empty($addParameters)) return $parameters;

        // 追加するパラメータを格納する変数
        $addParameter = null;

        foreach ($addParameters as $key) {
            // パラメータのkeyをEnumに変換する
            $key = AddParameterEnum::tryFrom($key);

            // パラメータのkeyがEnumに存在しない場合は次のループへ
            if (is_null($key)) continue;

            // 追加するパラメータを取得する
            $addParameter = match ($key) {
                AddParameterEnum::URL        => e(request()->getRequestUri()),
                AddParameterEnum::METHOD     => request()->method(),
                AddParameterEnum::IP         => request()->ip(),
                AddParameterEnum::USER_AGENT => request()->userAgent(),
                AddParameterEnum::DATETIME   => now()->format("Y-m-d H:i:s"),
            };

            // 追加するパラメータを追加する
            $parameters[$key->value] = $addParameter;
        }

        return $parameters;
    }

    /**
     * パラメータをマスクする処理
     * 
     * @param array<string, mixed> $parameters
     * @return array<string, mixed>
     */
    protected function maskParameters(array $parameters): array
    {
        // マスクするパラメータを取得する
        $maskedParameters = config("custom-request.masked_parameters", []);

        // マスクするパラメータがない場合はそのまま返す
        if (empty($maskedParameters)) return $parameters;

        foreach ($maskedParameters as $key) {
            if (!isset($parameters[$key])) continue;

            $parameters[$key] = config("custom-request.mask_string", "********");
        }

        return $parameters;
    }

    /**
     * Loggerインスタンスを取得する
     * 
     * @return \SimpleLogger\Laravel\Logger
     */
    protected function getLogger(): Logger
    {
        $logger = LoggerFacade::info();

        // ログを出力するディレクトリを設定する
        $logger->setDirectory(config("custom-request.logging_directly", "custom-request"));

        // ログのフォーマットが設定されている場合は設定する
        if (!empty(config("custom-request.log_format"))) $logger->setFormat(config("custom-request.log_format"));

        return $logger;
    }
}
