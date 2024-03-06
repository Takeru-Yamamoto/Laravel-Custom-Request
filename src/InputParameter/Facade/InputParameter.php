<?php

namespace LaravelCustomRequest\InputParameter\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * InputParameterのFacade
 * InputParameterManagerのMethodをstaticに呼び出せるようにする
 * 
 * @package LaravelCustomRequest\InputParameter\Facade
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface make(string $keyName)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface array(string $keyName, array|string|null $acceptKeys = null, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface requiredArrayKeys(string $keyName, array|string $keys, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface inArray(string $keyName, string $field, string $key, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface distinct(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface distinctStrict(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface distinctIgnoreCase(string $keyName, string|null $message = null)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface boolean(string $keyName, string|null $message = null)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface date(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface dateFormat(string $keyName, string $format, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface dateEqual(string $keyName, string $date, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface after(string $keyName, string $date, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface afterOrEqual(string $keyName, string $date, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface before(string $keyName, string $date, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface beforeOrEqual(string $keyName, string $date, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface timezone(string $keyName, string|null $identifier = null, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asDate(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asTime(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asDateTime(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asYearMonth(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asMonthDay(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asHourMinute(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asMinuteSecond(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asYear(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asMonth(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asMonthZero(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asMonthName(string $keyName, array|string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asMonthNameShort(string $keyName, array|string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asDay(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asDayZero(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asHour(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asHourZero(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asHourTwelveNotation(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asHourTwelveNotationZero(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asMinute(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface asSecond(string $keyName, string|null $message = null)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface enum(string $keyName, string $enumClass, string|null $message = null)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface same(string $keyName, string $field, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface different(string $keyName, string $field, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface gt(string $keyName, string $field, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface gte(string $keyName, string $field, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface lt(string $keyName, string $field, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface lte(string $keyName, string $field, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface confirmed(string $keyName, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface accepted(string $keyName, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface acceptedIf(string $keyName, string $field, mixed $value, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface declined(string $keyName, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface declinedIf(string $keyName, string $field, mixed $value, string $message = null)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface file(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface image(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface mimes(string $keyName, array<string>|string $extensions, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface mimetypes(string $keyName, array<string>|string $mimetypes, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface extensions(string $keyName, array<string>|string $extensions, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface dimensions(string $keyName, int|null $width = null, int|null $height = null, int|null $minWidth = null, int|null $minHeight = null, int|null $maxWidth = null, int|null $maxHeight = null, float|string|null $ratio = null, string|null $message = null)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface required(string $keyName, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface requiredIfField(string $keyName, string $field, array<mixed> $values, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface requiredUnlessField(string $keyName, string $field, array<mixed> $values, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface requiredIfAccepted(string $keyName, array<string>|string $fields, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface requiredWith(string $keyName, array<string>|string $fields, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface requiredWithAll(string $keyName, array<string>|string $fields, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface requiredWithout(string $keyName, array<string>|string $fields, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface requiredWithoutAll(string $keyName, array<string>|string $fields, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface missing(string $keyName, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface missingIfField(string $keyName, string $field, array<mixed> $values, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface missingUnlessField(string $keyName, string $field, array<mixed> $values, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface missingWith(string $keyName, array<string>|string $fields, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface missingWithAll(string $keyName, array<string>|string $fields, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface missingWithout(string $keyName, array<string>|string $fields, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface missingWithoutAll(string $keyName, array<string>|string $fields, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface prohibited(string $keyName, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface prohibitedIfField(string $keyName, string $field, array<mixed> $values, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface prohibitedUnlessField(string $keyName, string $field, array<mixed> $values, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface prohibits(string $keyName, array<string>|string $fields, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface present(string $keyName, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface filled(string $keyName, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface nullable(string $keyName, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface requiredIf(string $keyName, bool $isRequired, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface requiredUnless(string $keyName, bool $isRequired, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface missingIf(string $keyName, bool $isMissing, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface missingUnless(string $keyName, bool $isMissing, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface prohibitedIf(string $keyName, bool $isProhibited, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface prohibitedUnless(string $keyName, bool $isProhibited, string $message = null)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface numeric(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface integer(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface multipleOf(string $keyName, int $num, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface decimal(string $keyName, int $min, int|null $max = null, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface digits(string $keyName, int $min, int|null $max = null, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface maxDigits(string $keyName, int $max, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface minDigits(string $keyName, int $min, string|null $message = null)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface regex(string $keyName, string $pattern, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface notRegex(string $keyName, string $pattern, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface tel(string $keyName, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface postCode(string $keyName, string $message = null)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface size(string $keyName, int $size, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface max(string $keyName, int $max, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface min(string $keyName, int $min, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface between(string $keyName, int $min, int $max, string $message = null)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface string(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface json(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface currentPassword(string $keyName, string $guard = "web", string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface email(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface url(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface activeUrl(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface upperCase(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface lowerCase(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface ip(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface ipv4(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface ipv6(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface macAddress(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface uuid(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface ulid(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface ascii(string $keyName, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface alpha(string $keyName, bool $isAscii = false, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface alphaNum(string $keyName, bool $isAscii = false, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface alphaDash(string $keyName, bool $isAscii = false, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface hexColor(string $keyName, string|null $message = null)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface exists(string $keyName, string $table, string $column = null, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface existsNotDeleted(string $keyName, string $table, string $column = null, string $deletedAtColumn = "deleted_at", string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface unique(string $keyName, string $table, string $column = null, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface uniqueNotDeleted(string $keyName, string $table, string $column = null, string $deletedAtColumn = "deleted_at", string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface id(string $keyName, string $table, string $message = null)
 * 
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface in(string $keyName, \Illuminate\Contracts\Support\Arrayable|array<mixed>|string $values, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface notIn(string $keyName, \Illuminate\Contracts\Support\Arrayable|array<mixed>|string $values, string|null $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface startsWith(string $keyName, array<mixed>|string $values, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface doesntStartWith(string $keyName, array<mixed>|string $values, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface endsWith(string $keyName, array<mixed>|string $values, string $message = null)
 * @method static \LaravelCustomRequest\InputParameter\Interface\InputParameterInterface doesntEndWith(string $keyName, array<mixed>|string $values, string $message = null)
 * 
 * @see \LaravelCustomRequest\InputParameter\Interface\ManagerInterface
 */
class InputParameter extends Facade
{
    /** 
     * InputParameterManagerにアクセスするためのFacadeの名前を取得する
     * 
     * @return string 
     */
    protected static function getFacadeAccessor(): string
    {
        return static::class;
    }
}
