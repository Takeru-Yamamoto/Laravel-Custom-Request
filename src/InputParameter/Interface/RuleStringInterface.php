<?php

namespace LaravelCustomRequest\InputParameter\Interface;

/**
 * InputParameterのRuleStringトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface RuleStringInterface
{
    /**
     * パラメータが文字列であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function string(string $message = null): static;

    /**
     * パラメータがJSON文字列であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function json(string $message = null): static;

    /**
     * パラメータが認証されているユーザーのパスワードと一致することをバリデーションする
     * 
     * @param string $guard
     * @param string|null $message
     * @return static
     */
    public function currentPassword(string $guard = "web", string $message = null): static;

    /**
     * パラメータがメールアドレスであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function email(string $message = null): static;

    /**
     * パラメータがURLであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function url(string $message = null): static;

    /**
     * パラメータが有効なURLであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function activeUrl(string $message = null): static;

    /**
     * パラメータが大文字であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function upperCase(string $message = null): static;

    /**
     * パラメータが小文字であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function lowerCase(string $message = null): static;

    /**
     * パラメータがIPアドレスであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function ip(string $message = null): static;

    /**
     * パラメータがIPv4アドレスであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function ipv4(string $message = null): static;

    /**
     * パラメータがIPv6アドレスであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function ipv6(string $message = null): static;

    /**
     * パラメータがMACアドレスであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function macAddress(string $message = null): static;

    /**
     * パラメータがUUIDであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function uuid(string $message = null): static;

    /**
     * パラメータがULIDであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function ulid(string $message = null): static;

    /**
     * パラメータがASCII文字のみで構成されていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function ascii(string $message = null): static;

    /**
     * パラメータがUnicodeのアルファベット文字のみで構成されていることをバリデーションする
     * isAsciiがtrueの場合、ASCII文字のみで構成されていることもバリデーションする
     * 
     * @param bool $isAscii
     * @param string|null $message
     * @return static
     */
    public function alpha(bool $isAscii = false, string $message = null): static;

    /**
     * パラメータがUnicodeのアルファベット文字と数字のみで構成されていることをバリデーションする
     * isAsciiがtrueの場合、ASCII文字と数字のみで構成されていることもバリデーションする
     * 
     * @param bool $isAscii
     * @param string|null $message
     * @return static
     */
    public function alphaNum(bool $isAscii = false, string $message = null): static;

    /**
     * パラメータがUnicodeのアルファベット文字と数字とアンダースコアとハイフンのみで構成されていることをバリデーションする
     * isAsciiがtrueの場合、ASCII文字と数字とアンダースコアとハイフンのみで構成されていることもバリデーションする
     * 
     * @param bool $isAscii
     * @param string|null $message
     * @return static
     */
    public function alphaDash(bool $isAscii = false, string $message = null): static;

    /**
     * パラメータが16進数形式の有効なカラーコードであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function hexColor(string $message = null): static;
}
