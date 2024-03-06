<?php

namespace LaravelCustomRequest\InputParameter\Interface;

/**
 * InputParameterのRuleNecessityトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface RuleNecessityInterface
{
    /**
     * パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function required(string $message = null): static;

    /**
     * fieldの値がvaluesのどれかと一致する場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param string $field
     * @param array<mixed> $values
     * @param string|null $message
     * @return static
     */
    public function requiredIfField(string $field, array $values, string $message = null): static;

    /**
     * fieldsの値が1, true, "1", "true", "on"のいずれかと一致する場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function requiredIfAccepted(array|string $fields, string $message = null): static;

    /**
     * fieldの値がvaluesのどれとも一致しない場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param string $field
     * @param array<mixed> $values
     * @param string|null $message
     * @return static
     */
    public function requiredUnlessField(string $field, array $values, string $message = null): static;

    /**
     * fieldsのいずれかが存在している場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function requiredWith(array|string $fields, string $message = null): static;

    /**
     * fieldsが全て存在している場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function requiredWithAll(array|string $fields, string $message = null): static;

    /**
     * fieldsのいずれかが存在していない場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function requiredWithout(array|string $fields, string $message = null): static;

    /**
     * fieldsが全て存在していない場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function requiredWithoutAll(array|string $fields, string $message = null): static;

    /**
     * パラメータが存在しないことをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function missing(string $message = null): static;

    /**
     * fieldの値がvaluesのどれかと一致する場合、パラメータが存在しないことをバリデーションする
     * 
     * @param string $field
     * @param array<mixed> $values
     * @param string|null $message
     * @return static
     */
    public function missingIfField(string $field, array $values, string $message = null): static;

    /**
     * fieldの値がvaluesのどれとも一致しない場合、パラメータが存在しないことをバリデーションする
     * 
     * @param string $field
     * @param array<mixed> $values
     * @param string|null $message
     * @return static
     */
    public function missingUnlessField(string $field, array $values, string $message = null): static;

    /**
     * fieldsのいずれかが存在している場合、パラメータが存在しないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function missingWith(array|string $fields, string $message = null): static;

    /**
     * fieldsが全て存在している場合、パラメータが存在しないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function missingWithAll(array|string $fields, string $message = null): static;

    /**
     * fieldsのいずれかが存在していない場合、パラメータが存在しないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function missingWithout(array|string $fields, string $message = null): static;

    /**
     * fieldsが全て存在していない場合、パラメータが存在しないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function missingWithoutAll(array|string $fields, string $message = null): static;

    /**
     * パラメータが存在しない、または空であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function prohibited(string $message = null): static;

    /**
     * fieldの値がvalueのどれかと一致する場合、パラメータが存在しない、または空であることをバリデーションする
     * 
     * @param string $field
     * @param array<mixed> $values
     * @param string|null $message
     * @return static
     */
    public function prohibitedIfField(string $field, array $values, string $message = null): static;

    /**
     * fieldの値がvalueのどれとも一致しない場合、パラメータが存在しない、または空であることをバリデーションする
     * 
     * @param string $field
     * @param array<mixed> $values
     * @param string|null $message
     * @return static
     */
    public function prohibitedUnlessField(string $field, array $values, string $message = null): static;

    /**
     * パラメータが存在し、かつ空でない場合、fieldsの全てのフィールドが存在しない、または空であることをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function prohibits(array|string $fields, string $message = null): static;

    /**
     * パラメータが存在することをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function present(string $message = null): static;

    /**
     * パラメータが存在する場合、空でないことをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function filled(string $message = null): static;

    /**
     * パラメータの存在を確認せず、かつ空でも良いことをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function nullable(string $message = null): static;

    /**
     * isRequiredがtrueの場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param bool $isRequired
     * @param string|null $message
     * @return static
     */
    public function requiredIf(bool $isRequired, string $message = null): static;

    /**
     * isRequiredがfalseの場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param bool $isRequired
     * @param string|null $message
     * @return static
     */
    public function requiredUnless(bool $isRequired, string $message = null): static;

    /**
     * isMissingがtrueの場合、パラメータが存在しないことをバリデーションする
     * 
     * @param bool $isMissing
     * @param string|null $message
     * @return static
     */
    public function missingIf(bool $isMissing, string $message = null): static;

    /**
     * isMissingがfalseの場合、パラメータが存在しないことをバリデーションする
     * 
     * @param bool $isMissing
     * @param string|null $message
     * @return static
     */
    public function missingUnless(bool $isMissing, string $message = null): static;

    /**
     * isProhibitedがtrueの場合、パラメータが存在しない、または空であることをバリデーションする
     * 
     * @param bool $isProhibited
     * @param string|null $message
     * @return static
     */
    public function prohibitedIf(bool $isProhibited, string $message = null): static;

    /**
     * isProhibitedがfalseの場合、パラメータが存在しない、または空であることをバリデーションする
     * 
     * @param bool $isProhibited
     * @param string|null $message
     * @return static
     */
    public function prohibitedUnless(bool $isProhibited, string $message = null): static;
}
