<?php

namespace LaravelCustomRequest\InputParameter\Trait;

/**
 * InputParameterで使用する日付に関するバリデーションルールを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @method static addRuleAndMessage(string $ruleKey, string|null $message)
 * @method static addRuleValuesAndMessage(string $ruleKey, array<string|int>|string|int $values, string|null $message)
 */
trait RuleDate
{
    /**
     * パラメータが日付として扱える値であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function date(string $message = null): static
    {
        return $this->addRuleAndMessage("date", $message);
    }

    /**
     * パラメータが日付として扱える値であり、指定されたフォーマットに従っていることをバリデーションする
     * 
     * @param string $format
     * @param string|null $message
     * @return static
     */
    public function dateFormat(string $format, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("date_format", $format, $message);
    }

    /**
     * パラメータが日付として扱える値であり、dateと等しい日付であることをバリデーションする
     * 
     * @param string $date
     * @param string|null $message
     * @return static
     */
    public function dateEqual(string $date, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("date_equals", $date, $message);
    }

    /**
     * パラメータが日付として扱える値であり、dateよりも後の日付であることをバリデーションする
     * dateには比較する日付か、パラメータ名を指定する
     * 
     * @param string $date
     * @param string|null $message
     * @return static
     */
    public function after(string $date, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("after", $date, $message);
    }

    /**
     * パラメータが日付として扱える値であり、dateと同じか、dateよりも後の日付であることをバリデーションする
     * dateには比較する日付か、パラメータ名を指定する
     * 
     * @param string $date
     * @param string|null $message
     * @return static
     */
    public function afterOrEqual(string $date, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("after_or_equal", $date, $message);
    }

    /**
     * パラメータが日付として扱える値であり、dateよりも前の日付であることをバリデーションする
     * dateには比較する日付か、パラメータ名を指定する
     * 
     * @param string $date
     * @param string|null $message
     * @return static
     */
    public function before(string $date, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("before", $date, $message);
    }

    /**
     * パラメータが日付として扱える値であり、dateと同じか、dateよりも前の日付であることをバリデーションする
     * dateには比較する日付か、パラメータ名を指定する
     * 
     * @param string $date
     * @param string|null $message
     * @return static
     */
    public function beforeOrEqual(string $date, string $message = null): static
    {
        return $this->addRuleValuesAndMessage("before_or_equal", $date, $message);
    }

    /**
     * パラメータが有効なタイムゾーンであることをバリデーションする
     * identifierが指定されている場合、identifierで利用可能なタイムゾーンであることをバリデーションする
     * 
     * @param string|null $identifier
     * @param string|null $message
     * @return static
     */
    public function timezone(string $identifier = null, string $message = null): static
    {
        return is_null($identifier) ? $this->addRuleAndMessage("timezone", $message) : $this->addRuleValuesAndMessage("timezone", $identifier, $message);
    }



    /*----------------------------------------*
     * Additional Rules
     *----------------------------------------*/

    /**
     * パラメータが日付として扱える値であり、Y-m-dのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asDate(string $message = null): static
    {
        return $this->dateFormat("Y-m-d", $message);
    }

    /**
     * パラメータが日付として扱える値であり、H:i:sのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asTime(string $message = null): static
    {
        return $this->dateFormat("H:i:s", $message);
    }

    /**
     * パラメータが日付として扱える値であり、Y-m-d H:i:sのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asDateTime(string $message = null): static
    {
        return $this->dateFormat("Y-m-d H:i:s", $message);
    }

    /**
     * パラメータが日付として扱える値であり、Y-mのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asYearMonth(string $message = null): static
    {
        return $this->dateFormat("Y-m", $message);
    }

    /**
     * パラメータが日付として扱える値であり、m-dのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMonthDay(string $message = null): static
    {
        return $this->dateFormat("m-d", $message);
    }

    /**
     * パラメータが日付として扱える値であり、H:iのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asHourMinute(string $message = null): static
    {
        return $this->dateFormat("H:i", $message);
    }

    /**
     * パラメータが日付として扱える値であり、i:sのフォーマットに従っていることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMinuteSecond(string $message = null): static
    {
        return $this->dateFormat("i:s", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な年であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asYear(string $message = null): static
    {
        return $this->dateFormat("Y", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な月であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMonth(string $message = null): static
    {
        return $this->dateFormat("n", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な0埋めされている月であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMonthZero(string $message = null): static
    {
        return $this->dateFormat("m", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な月の名前であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMonthName(array|string $message = null): static
    {
        return $this->dateFormat("F", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な月の省略名であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMonthNameShort(array|string $message = null): static
    {
        return $this->dateFormat("M", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な日であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asDay(string $message = null): static
    {
        return $this->dateFormat("j", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な0埋めされている日であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asDayZero(string $message = null): static
    {
        return $this->dateFormat("d", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な時であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asHour(string $message = null): static
    {
        return $this->dateFormat("G", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な0埋めされている時であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asHourZero(string $message = null): static
    {
        return $this->dateFormat("H", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な12時間表記の時であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asHourTwelveNotation(string $message = null): static
    {
        return $this->dateFormat("g", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な0埋めされている12時間表記の時であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asHourTwelveNotationZero(string $message = null): static
    {
        return $this->dateFormat("h", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な分であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asMinute(string $message = null): static
    {
        return $this->dateFormat("i", $message);
    }

    /**
     * パラメータが日付として扱える値であり、有効な秒であることをバリデーションする
     * 
     * @param string|null $message
     * @return static
     */
    public function asSecond(string $message = null): static
    {
        return $this->dateFormat("s", $message);
    }
}
