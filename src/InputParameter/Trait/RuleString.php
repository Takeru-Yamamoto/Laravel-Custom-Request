<?php

namespace LaravelCustomRequest\InputParameter\Trait;

/**
 * InputParameterで使用する文字列に関するバリデーションルールを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @method static addRuleAndMessage(string $ruleKey, string|null $message)
 * @method static addRuleValuesAndMessage(string $ruleKey, array<string|int>|string|int $values, string|null $message)
 */
trait RuleString
{
    /**
     * パラメータが文字列であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function string(string $message = null): static
    {
        return $this->addRuleAndMessage("string", $message);
    }

    /**
     * パラメータがJSON文字列であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function json(string $message = null): static
    {
        return $this->addRuleAndMessage("json", $message);
    }

    /**
     * パラメータが認証されているユーザーのパスワードと一致することをバリデーションする
     * 
     * @param string $guard
     * @param string|null $message
     * @return static
     */
    public function currentPassword(string $guard = "web", string $message = null): static
    {
        return $this->addRuleValuesAndMessage("current_password", $guard, $message);
    }

    /**
     * パラメータがメールアドレスであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function email(string $message = null): static
    {
        return $this->addRuleAndMessage("email", $message);
    }

    /**
     * パラメータがURLであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function url(string $message = null): static
    {
        return $this->addRuleAndMessage("url", $message);
    }

    /**
     * パラメータが有効なURLであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function activeUrl(string $message = null): static
    {
        return $this->addRuleAndMessage("active_url", $message);
    }

    /**
     * パラメータが大文字であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function upperCase(string $message = null): static
    {
        return $this->addRuleAndMessage("uppercase", $message);
    }

    /**
     * パラメータが小文字であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function lowerCase(string $message = null): static
    {
        return $this->addRuleAndMessage("lowercase", $message);
    }

    /**
     * パラメータがIPアドレスであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function ip(string $message = null): static
    {
        return $this->addRuleAndMessage("ip", $message);
    }

    /**
     * パラメータがIPv4アドレスであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function ipv4(string $message = null): static
    {
        return $this->addRuleAndMessage("ipv4", $message);
    }

    /**
     * パラメータがIPv6アドレスであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function ipv6(string $message = null): static
    {
        return $this->addRuleAndMessage("ipv6", $message);
    }

    /**
     * パラメータがMACアドレスであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function macAddress(string $message = null): static
    {
        return $this->addRuleAndMessage("mac_address", $message);
    }

    /**
     * パラメータがUUIDであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function uuid(string $message = null): static
    {
        return $this->addRuleAndMessage("uuid", $message);
    }

    /**
     * パラメータがULIDであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function ulid(string $message = null): static
    {
        return $this->addRuleAndMessage("ulid", $message);
    }

    /**
     * パラメータがASCII文字のみで構成されていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function ascii(string $message = null): static
    {
        return $this->addRuleAndMessage("ascii", $message);
    }

    /**
     * パラメータがUnicodeのアルファベット文字のみで構成されていることをバリデーションする
     * isAsciiがtrueの場合、ASCII文字のみで構成されていることもバリデーションする
     * 
     * @param bool $isAscii
     * @param string|null $message
     * @return static
     */
    public function alpha(bool $isAscii = false, string $message = null): static
    {
        return $isAscii
            ? $this->addRuleValuesAndMessage("alpha", "ascii", $message)
            : $this->addRuleAndMessage("alpha", $message);
    }

    /**
     * パラメータがUnicodeのアルファベット文字と数字のみで構成されていることをバリデーションする
     * isAsciiがtrueの場合、ASCII文字と数字のみで構成されていることもバリデーションする
     * 
     * @param bool $isAscii
     * @param string|null $message
     * @return static
     */
    public function alphaNum(bool $isAscii = false, string $message = null): static
    {
        return $isAscii
            ? $this->addRuleValuesAndMessage("alpha_num", "ascii", $message)
            : $this->addRuleAndMessage("alpha_num", $message);
    }

    /**
     * パラメータがUnicodeのアルファベット文字と数字とアンダースコアとハイフンのみで構成されていることをバリデーションする
     * isAsciiがtrueの場合、ASCII文字と数字とアンダースコアとハイフンのみで構成されていることもバリデーションする
     * 
     * @param bool $isAscii
     * @param string|null $message
     * @return static
     */
    public function alphaDash(bool $isAscii = false, string $message = null): static
    {
        return $isAscii
            ? $this->addRuleValuesAndMessage("alpha_dash", "ascii", $message)
            : $this->addRuleAndMessage("alpha_dash", $message);
    }

    /**
     * パラメータが16進数形式の有効なカラーコードであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function hexColor(string $message = null): static
    {
        return $this->addRuleAndMessage("hex_color", $message);
    }
}
