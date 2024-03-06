<?php

namespace LaravelCustomRequest\InputParameter\Trait;

/**
 * InputParameterで使用するパラメータの要不要に関するバリデーションルールを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @property-read string $keyName
 * 
 * @method static addRuleAndMessage(string $ruleKey, string|null $message)
 * @method static addRuleValuesAndMessage(string $ruleKey, array<string|int>|string|int $values, string|null $message)
 */
trait RuleNecessity
{
    /**
     * パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function required(string $message = null): static
    {
        return $this->addRuleAndMessage("required", $message);
    }

    /**
     * fieldの値がvaluesのどれかと一致する場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param string $field
     * @param array<mixed> $values
     * @param string|null $message
     * @return static
     */
    public function requiredIfField(string $field, array $values, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("required_if", [$field, ...$values], $message);
    }

    /**
     * fieldsの値が1, true, "1", "true", "on"のいずれかと一致する場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function requiredIfAccepted(array|string $fields, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("required_if_accepted", $fields, $message);
    }

    /**
     * fieldの値がvaluesのどれとも一致しない場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param string $field
     * @param array<mixed> $values
     * @param string|null $message
     * @return static
     */
    public function requiredUnlessField(string $field, array $values, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("required_unless", [$field, ...$values], $message);
    }

    /**
     * fieldsのいずれかが存在している場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function requiredWith(array|string $fields, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("required_with", $fields, $message);
    }

    /**
     * fieldsが全て存在している場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function requiredWithAll(array|string $fields, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("required_with_all", $fields, $message);
    }

    /**
     * fieldsのいずれかが存在していない場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function requiredWithout(array|string $fields, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("required_without", $fields, $message);
    }

    /**
     * fieldsが全て存在していない場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function requiredWithoutAll(array|string $fields, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("required_without_all", $fields, $message);
    }

    /**
     * パラメータが存在しないことをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function missing(string $message = null): static
    {
        return $this->addRuleAndMessage("missing", $message);
    }

    /**
     * fieldの値がvaluesのどれかと一致する場合、パラメータが存在しないことをバリデーションする
     * 
     * @param string $field
     * @param array<mixed> $values
     * @param string|null $message
     * @return static
     */
    public function missingIfField(string $field, array $values, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("missing_if", [$field, ...$values], $message);
    }

    /**
     * fieldの値がvaluesのどれとも一致しない場合、パラメータが存在しないことをバリデーションする
     * 
     * @param string $field
     * @param array<mixed> $values
     * @param string|null $message
     * @return static
     */
    public function missingUnlessField(string $field, array $values, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("missing_unless", [$field, ...$values], $message);
    }

    /**
     * fieldsのいずれかが存在している場合、パラメータが存在しないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function missingWith(array|string $fields, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("missing_with", $fields, $message);
    }

    /**
     * fieldsが全て存在している場合、パラメータが存在しないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function missingWithAll(array|string $fields, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("missing_with_all", $fields, $message);
    }

    /**
     * fieldsのいずれかが存在していない場合、パラメータが存在しないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function missingWithout(array|string $fields, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("missing_without", $fields, $message);
    }

    /**
     * fieldsが全て存在していない場合、パラメータが存在しないことをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function missingWithoutAll(array|string $fields, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("missing_without_all", $fields, $message);
    }

    /**
     * パラメータが存在しない、または空であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function prohibited(string $message = null): static
    {
        return $this->addRuleAndMessage("prohibited", $message);
    }

    /**
     * fieldの値がvalueのどれかと一致する場合、パラメータが存在しない、または空であることをバリデーションする
     * 
     * @param string $field
     * @param array<mixed> $values
     * @param string|null $message
     * @return static
     */
    public function prohibitedIfField(string $field, array $values, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("prohibited_if", [$field, ...$values], $message);
    }

    /**
     * fieldの値がvalueのどれとも一致しない場合、パラメータが存在しない、または空であることをバリデーションする
     * 
     * @param string $field
     * @param array<mixed> $values
     * @param string|null $message
     * @return static
     */
    public function prohibitedUnlessField(string $field, array $values, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("prohibited_unless", [$field, ...$values], $message);
    }

    /**
     * パラメータが存在し、かつ空でない場合、fieldsの全てのフィールドが存在しない、または空であることをバリデーションする
     * 
     * @param array<string>|string $fields
     * @param string|null $message
     * @return static
     */
    public function prohibits(array|string $fields, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("prohibits", $fields, $message);
    }

    /**
     * パラメータが存在することをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function present(string $message = null): static
    {
        return $this->addRuleAndMessage("present", $message);
    }

    /**
     * パラメータが存在する場合、空でないことをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function filled(string $message = null): static
    {
        return $this->addRuleAndMessage("filled", $message);
    }

    /**
     * パラメータの存在を確認せず、かつ空でも良いことをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function nullable(string $message = null): static
    {
        return $this->addRuleAndMessage("nullable", $message);
    }



    /*----------------------------------------*
     * Additional Rules
     *----------------------------------------*/

    /**
     * isRequiredがtrueの場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param bool $isRequired
     * @param string|null $message
     * @return static
     */
    public function requiredIf(bool $isRequired, string $message = null): static
    {
        return $isRequired ? $this->required($message) : $this;
    }

    /**
     * isRequiredがfalseの場合、パラメータが存在し、かつ空でないことをバリデーションする
     * 
     * @param bool $isRequired
     * @param string|null $message
     * @return static
     */
    public function requiredUnless(bool $isRequired, string $message = null): static
    {
        return !$isRequired ? $this->required($message) : $this;
    }

    /**
     * isMissingがtrueの場合、パラメータが存在しないことをバリデーションする
     * 
     * @param bool $isMissing
     * @param string|null $message
     * @return static
     */
    public function missingIf(bool $isMissing, string $message = null): static
    {
        return $isMissing ? $this->missing($message) : $this;
    }

    /**
     * isMissingがfalseの場合、パラメータが存在しないことをバリデーションする
     * 
     * @param bool $isMissing
     * @param string|null $message
     * @return static
     */
    public function missingUnless(bool $isMissing, string $message = null): static
    {
        return !$isMissing ? $this->missing($message) : $this;
    }

    /**
     * isProhibitedがtrueの場合、パラメータが存在しない、または空であることをバリデーションする
     * 
     * @param bool $isProhibited
     * @param string|null $message
     * @return static
     */
    public function prohibitedIf(bool $isProhibited, string $message = null): static
    {
        return $isProhibited ? $this->prohibited($message) : $this;
    }

    /**
     * isProhibitedがfalseの場合、パラメータが存在しない、または空であることをバリデーションする
     * 
     * @param bool $isProhibited
     * @param string|null $message
     * @return static
     */
    public function prohibitedUnless(bool $isProhibited, string $message = null): static
    {
        return !$isProhibited ? $this->prohibited($message) : $this;
    }
}
