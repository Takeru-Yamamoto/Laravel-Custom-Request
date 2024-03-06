<?php

namespace LaravelCustomRequest\InputParameter\Trait;

/**
 * InputParameterで使用するファイルに関するバリデーションルールを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @method static addRuleAndMessage(string $ruleKey, string|null $message)
 * @method static addRuleValuesAndMessage(string $ruleKey, array<string|int>|string|int $values, string|null $message)
 */
trait RuleFile
{
    /**
     * パラメータがファイルであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function file(string $message = null): static
    {
        return $this->addRuleAndMessage("file", $message);
    }

    /**
     * パラメータが画像ファイルであることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function image(string $message = null): static
    {
        return $this->addRuleAndMessage("image", $message);
    }

    /**
     * パラメータがファイルであり、extensionsに指定されたもの拡張子のいずれかに対応するmimeタイプであることをバリデーションする
     * 
     * @param array<string>|string $extensions
     * @param string|null $message
     * @return static
     */
    public function mimes(array|string $extensions, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("mimes", $extensions, $message);
    }

    /**
     * パラメータがファイルであり、mimeタイプがmimetypesに指定されたもののいずれかであることをバリデーションする
     * 
     * @param array<string>|string $mimetypes
     * @param string|null $message
     * @return static
     */
    public function mimetypes(array|string $mimetypes, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("mimetypes", $mimetypes, $message);
    }

    /**
     * パラメータがファイルであり、拡張子がextensionsに指定されたもののいずれかであることをバリデーションする
     * 
     * @param array<string>|string $extensions
     * @param string|null $message
     * @return static
     */
    public function extensions(array|string $extensions, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("extensions", $extensions, $message);
    }

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
    public function dimensions(int $width = null, int $height = null, int $minWidth = null, int $minHeight = null, int $maxWidth = null, int $maxHeight = null, float|string $ratio = null, string $message = null): static
    {
        $rules = [];

        if (!is_null($width)) $rules[] = "width={$width}";

        if (!is_null($height)) $rules[] = "height={$height}";

        if (!is_null($minWidth)) $rules[] = "min_width={$minWidth}";

        if (!is_null($minHeight)) $rules[] = "min_height={$minHeight}";

        if (!is_null($maxWidth)) $rules[] = "max_width={$maxWidth}";

        if (!is_null($maxHeight)) $rules[] = "max_height={$maxHeight}";

        if (!is_null($ratio)) $rules[] = "ratio={$ratio}";

        return empty($rules) ? $this : $this->addRuleValuesAndMessage("dimensions", $rules, $message);
    }
}
