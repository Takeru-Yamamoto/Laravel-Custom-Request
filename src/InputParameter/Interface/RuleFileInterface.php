<?php

namespace LaravelCustomRequest\InputParameter\Interface;

/**
 * InputParameterのRuleFileトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface RuleFileInterface
{
    /**
     * パラメータがファイルであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function file(string $message = null): static;

    /**
     * パラメータが画像ファイルであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function image(string $message = null): static;

    /**
     * パラメータがファイルであり、extensionsに指定されたもの拡張子のいずれかに対応するmimeタイプであることをバリデーションする
     * 
     * @param array<string>|string $extensions
     * @param string|null $message
     * @return static
     */
    public function mimes(array|string $extensions, string $message = null): static;

    /**
     * パラメータがファイルであり、mimeタイプがmimetypesに指定されたもののいずれかであることをバリデーションする
     * 
     * @param array<string>|string $mimetypes
     * @param string|null $message
     * @return static
     */
    public function mimetypes(array|string $mimetypes, string $message = null): static;

    /**
     * パラメータがファイルであり、拡張子がextensionsに指定されたもののいずれかであることをバリデーションする
     * 
     * @param array<string>|string $extensions
     * @param string|null $message
     * @return static
     */
    public function extensions(array|string $extensions, string $message = null): static;

    /**
     * パラメータがファイルであり、指定されたサイズと一致することをバリデーションする
     * 
     * @param int|null $width
     * @param int|null $height
     * @param int|null $minWidth
     * @param int|null $minHeight
     * @param int|null $maxWidth
     * @param int|null $maxHeight
     * @param float|string|null $ratio
     * @param string|null $message
     * @return static
     */
    public function dimensions(int $width = null, int $height = null, int $minWidth = null, int $minHeight = null, int $maxWidth = null, int $maxHeight = null, float|string $ratio = null, string $message = null): static;
}
