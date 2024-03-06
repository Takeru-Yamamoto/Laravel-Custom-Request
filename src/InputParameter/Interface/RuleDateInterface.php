<?php

namespace LaravelCustomRequest\InputParameter\Interface;

/**
 * InputParameterのRuleDateトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface RuleDateInterface
{
    /**
     * パラメータが日付として扱える値であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function date(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、指定されたフォーマットに従っていることをバリデーションする
     * 
     * @param string $format
     * @param string|null $message
     * @return static
     */
    public function dateFormat(string $format, string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、dateと等しい日付であることをバリデーションする
     * 
     * @param string $date
     * @param string|null $message
     * @return static
     */
    public function dateEqual(string $date, string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、dateよりも後の日付であることをバリデーションする
     * dateには比較する日付か、パラメータ名を指定する
     * 
     * @param string $date
     * @param string|null $message
     * @return static
     */
    public function after(string $date, string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、dateと同じか、dateよりも後の日付であることをバリデーションする
     * dateには比較する日付か、パラメータ名を指定する
     * 
     * @param string $date
     * @param string|null $message
     * @return static
     */
    public function afterOrEqual(string $date, string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、dateよりも前の日付であることをバリデーションする
     * dateには比較する日付か、パラメータ名を指定する
     * 
     * @param string $date
     * @param string|null $message
     * @return static
     */
    public function before(string $date, string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、dateと同じか、dateよりも前の日付であることをバリデーションする
     * dateには比較する日付か、パラメータ名を指定する
     * 
     * @param string $date
     * @param string|null $message
     * @return static
     */
    public function beforeOrEqual(string $date, string $message = null): static;

    /**
     * パラメータが有効なタイムゾーンであることをバリデーションする
     * identifierが指定されている場合、identifierで利用可能なタイムゾーンであることをバリデーションする
     * 
     * @param string|null $identifier
     * @param string|null $message
     * @return static
     */
    public function timezone(string $identifier = null, string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、Y-m-dのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asDate(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、H:i:sのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asTime(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、Y-m-d H:i:sのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asDateTime(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、Y-mのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asYearMonth(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、m-dのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMonthDay(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、H:iのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asHourMinute(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、i:sのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMinuteSecond(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な年であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asYear(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な月であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMonth(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な0埋めされている月であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMonthZero(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な月の名前であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMonthName(array|string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な月の省略名であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMonthNameShort(array|string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な日であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asDay(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な0埋めされている日であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asDayZero(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な時であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asHour(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な0埋めされている時であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asHourZero(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な12時間表記の時であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asHourTwelveNotation(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な0埋めされている12時間表記の時であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asHourTwelveNotationZero(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な分であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMinute(string $message = null): static;

    /**
     * パラメータが日付として扱える値であり、有効な秒であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asSecond(string $message = null): static;
}
