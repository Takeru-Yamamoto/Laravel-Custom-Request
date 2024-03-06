<?php

namespace LaravelCustomRequest\Trait;

use UnitEnum;

use Illuminate\Http\UploadedFile;

/**
 * validatedメソッドの返り値をプロパティにバインドする処理を管理する
 * 
 * @package LaravelCustomRequest\Trait
 * 
 * @property-read \Illuminate\Contracts\Validation\Validator $validator
 */
trait BindValidated
{
    /**
     * バリデーション済みのデータ
     * 
     * @var array<string, mixed>
     */
    protected array $validated;


    /**
     * クラスプロパティにバリデーション済みのデータをバインドするメイン処理
     * 
     * @return void
     */
    protected function bindValidatedResolved(): void
    {
        $this->setValidated($this->validator->validated());

        $this->prepareForBindValidated();

        $this->bindValidated();

        $this->passedBindValidated();
    }

    /**
     * bindValidatedResolvedメソッドの実行前に実行する処理
     * 
     * @return void
     */
    protected function prepareForBindValidatedResolved(): void
    {
    }

    /**
     * bindValidatedResolvedメソッドの実行後に実行する処理
     * 
     * @return void
     */
    protected function passedBindValidatedResolved(): void
    {
    }


    /**
     * validatedプロパティにバリデーション済みのデータをセットする
     * 
     * @return void
     */
    protected function setValidated(array $validated): void
    {
        $this->validated = $validated;
    }

    /**
     * クラスプロパティにバリデーション済みのデータをバインドする
     * 
     * @return void
     */
    abstract protected function bindValidated(): void;

    /**
     * bindValidatedメソッドの実行前に実行する処理
     * 
     * @return void
     */
    protected function prepareForBindValidated(): void
    {
    }

    /**
     * bindValidatedメソッドの実行後に実行する処理
     * 
     * @return void
     */
    protected function passedBindValidated(): void
    {
    }



    /*----------------------------------------*
     * Bind Validated
     *----------------------------------------*/

    /**
     * バリデーション済みのデータにkeyが存在するか
     * 
     * @param string $key
     * @return bool
     */
    protected function issetValidated(string $key): bool
    {
        return isset($this->validated[$key]);
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueを返す
     * 存在しない場合はnullを返す
     * 
     * @param string $key
     * @return mixed
     */
    protected function bind(string $key): mixed
    {
        return $this->issetValidated($key) ? $this->validated[$key] : null;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをstring型で返す
     * 存在しない場合はnullを返す
     * 
     * @param string $key
     * @return string|null
     */
    protected function bindNullableString(string $key): ?string
    {
        $bind = $this->bind($key);

        return is_string($bind) ? strval($bind) : null;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをstring型で返す
     * 存在しない場合はdefaultを返す
     * 
     * @param string $key
     * @param string $default
     * @return string
     */
    protected function bindString(string $key, string $default = ""): string
    {
        return $this->bindNullableString($key) ?? $default;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをint型で返す
     * 存在しない場合はnullを返す
     * 
     * @param string $key
     * @return int|null
     */
    protected function bindNullableInt(string $key): ?int
    {
        $bind = $this->bind($key);

        return is_numeric($bind) ? intval($bind) : null;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをint型で返す
     * 存在しない場合はdefaultを返す
     * 
     * @param string $key
     * @param int $default
     * @return int
     */
    protected function bindInt(string $key, int $default = 0): int
    {
        return $this->bindNullableInt($key) ?? $default;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをfloat型で返す
     * 存在しない場合はnullを返す
     * 
     * @param string $key
     * @return float|null
     */
    protected function bindNullableFloat(string $key): ?float
    {
        $bind = $this->bind($key);

        return is_numeric($bind) ? floatval($bind) : null;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをfloat型で返す
     * 存在しない場合はdefaultを返す
     * 
     * @param string $key
     * @param float $default
     * @return float
     */
    protected function bindFloat(string $key, float $default = 0.0): float
    {
        return $this->bindNullableFloat($key) ?? $default;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをbool型で返す
     * 存在しない場合はnullを返す
     * 
     * @param string $key
     * @return bool|null
     */
    protected function bindNullableBool(string $key): ?bool
    {
        $bind = $this->bind($key);

        return is_bool($bind) ? boolval($bind) : null;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをbool型で返す
     * 存在しない場合はdefaultを返す
     * 
     * @param string $key
     * @param bool $default
     * @return bool
     */
    protected function bindBool(string $key, bool $default = false): bool
    {
        return $this->bindNullableBool($key) ?? $default;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをarray型で返す
     * 存在しない場合はnullを返す
     * 
     * @param string $key
     * @return array|null
     */
    protected function bindNullableArray(string $key): ?array
    {
        $bind = $this->bind($key);

        return is_array($bind) ? $bind : null;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをarray型で返す
     * 存在しない場合はdefaultを返す
     * 
     * @param string $key
     * @param array $default
     * @return array
     */
    protected function bindArray(string $key, array $default = []): array
    {
        return $this->bindNullableArray($key) ?? $default;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをUploadedFile型またはUploadedFile型の配列で返す
     * 存在しない場合はnullを返す
     * 
     * @param string $key
     * @return UploadedFile|array<UploadedFile>|null
     */
    protected function bindNullableFile(string $key): UploadedFile|array|null
    {
        $bind = $this->bind($key);

        return $bind instanceof UploadedFile || is_array($bind) ? $bind : null;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをUnitEnumクラスで返す
     * 存在しない場合はnullを返す
     * 
     * @param string $key
     * @param string $enumClass
     * @return UnitEnum|null
     */
    protected function bindNullableEnum(string $key, string $enumClass): ?UnitEnum
    {
        $bind = $this->bind($key);

        return enum_exists($enumClass) ? $enumClass::tryFrom($bind) : null;
    }

    /**
     * バリデーション済みのデータのkeyに対応するvalueをUnitEnumクラスで返す
     * 存在しない場合はdefaultを返す
     * 
     * @param string $key
     * @param string $enumClass
     * @param UnitEnum $default
     * @return UnitEnum
     */
    protected function bindEnum(string $key, string $enumClass, UnitEnum $default): UnitEnum
    {
        return $this->bindNullableEnum($key, $enumClass) ?? $default;
    }
}
