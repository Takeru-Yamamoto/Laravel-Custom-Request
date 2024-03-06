<?php

namespace LaravelCustomRequest\Trait;

use Illuminate\Contracts\Validation\Validator;

/**
 * FormRequestで使用するメソッドのオーバーライドを管理する
 * 
 * @package LaravelCustomRequest\Trait
 *  
 * @method void loggingParameters()
 * @method void setInputParameters()
 * @method void prepareForValidateResolved()
 * @method void passedValidateResolved()
 * @method void prepareForBindValidatedResolved()
 * @method void bindValidatedResolved()
 * @method void passedBindValidatedResolved()
 * 
 * @method bool isAuthorized()
 * @method \Illuminate\Auth\Access\AuthorizationException getAuthorizationException()
 * 
 * @method array<string, int|string> additionalData()
 * @method array<string, \Stringable|array<mixed>|string> getRules()
 * @method array<string, string> getAttributes()
 * @method array<string, string> getMessages()
 */
trait Override
{
    /*----------------------------------------*
     * Validate Resolved
     *----------------------------------------*/

    /**
     * \Illuminate\Foundation\Providersで実行されるFormRequestのメイン処理
     *
     * @return void
     */
    #[\Override]
    public function validateResolved(): void
    {
        // 受け取ったパラメータをログに出力する処理
        $this->loggingParameters();

        // クラスプロパティにInputParameterのインスタンスをバインドする処理
        $this->setInputParameters();

        // validateResolvedメソッドの実行前に実行する処理
        $this->prepareForValidateResolved();

        // FormRequestのメイン処理
        parent::validateResolved();

        // validateResolvedメソッドの実行後に実行する処理
        $this->passedValidateResolved();

        // bindValidatedResolvedメソッドの実行前に実行する処理
        $this->prepareForBindValidatedResolved();

        // クラスプロパティにバリデーション済みのデータをバインドするメイン処理
        $this->bindValidatedResolved();

        // bindValidatedResolvedメソッドの実行後に実行する処理
        $this->passedBindValidatedResolved();
    }



    /*----------------------------------------*
     * Authorization
     *----------------------------------------*/

    /**
     * リクエストが認可されているかを取得する
     *
     * @return bool
     */
    #[\Override]
    protected function passesAuthorization(): bool
    {
        return $this->authorize();
    }

    /**
     * リクエストが認可されているか
     * 
     * @return bool
     */
    public function authorize(): bool
    {
        return $this->isAuthorized();
    }

    /**
     * リクエストが認可されていない場合に実行する処理
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @return void
     */
    #[\Override]
    protected function failedAuthorization()
    {
        throw $this->getAuthorizationException();
    }



    /*----------------------------------------*
     * Validation
     *----------------------------------------*/

    /**
     * バリデーションを行う前に実行する処理
     *
     * @return void
     */
    #[\Override]
    protected function prepareForValidation(): void
    {
    }

    /**
     * バリデーションを行った後に実行する処理
     *
     * @return void
     */
    #[\Override]
    protected function passedValidation(): void
    {
    }

    /**
     * バリデーションに使用するデータを取得する
     *
     * @return array
     */
    #[\Override]
    public function validationData(): array
    {
        return array_merge(parent::validationData(), $this->additionalData());
    }

    /**
     * バリデーションに失敗した場合に実行する処理
     * ValidationExceptionをスローし、リダイレクト処理を行う
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @throws \Illuminate\Validation\ValidationException
     * @return void
     */
    #[\Override]
    protected function failedValidation(Validator $validator): void
    {
        parent::failedValidation($validator);
    }

    /**
     * バリデーションのルール
     *
     * @return array<string, \Stringable|array<mixed>|string>
     */
    public function rules(): array
    {
        return $this->getRules();
    }

    /**
     * バリデーションで使用する属性名
     *
     * @return array<string, string>
     */
    #[\Override]
    public function attributes(): array
    {
        return $this->getAttributes();
    }

    /**
     * バリデーションで使用するメッセージ
     *
     * @return array<string, string>
     */
    #[\Override]
    public function messages(): array
    {
        return $this->getMessages();
    }
}
