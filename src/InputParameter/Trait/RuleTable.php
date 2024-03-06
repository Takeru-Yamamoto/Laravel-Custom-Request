<?php

namespace LaravelCustomRequest\InputParameter\Trait;

use Illuminate\Validation\Rule;

/**
 * InputParameterで使用するデータベースのテーブルに関するバリデーションルールを管理する
 * 
 * @package LaravelCustomRequest\InputParameter\Trait
 * 
 * @property-read string $keyName
 * 
 * @method static addRuleObjectAndMessage(string $ruleKey, \Stringable $rule, string|null $message)
 */
trait RuleTable
{
    /**
     * パラメータがtableのcolumnに存在することをバリデーションする
     * columnが指定されていない場合、keyNameが代わりに使用される
     * 
     * @param string $table
     * @param string|null $column
     * @param string|null $message
     * @return static
     */
    public function exists(string $table, string $column = null, string $message = null): static
    {
        if (is_null($column)) $column = $this->keyName;

        return $this->addRuleObjectAndMessage("exists", Rule::exists($table, $column), $message);
    }

    /**
     * パラメータがtableのcolumnに存在し、かつ論理削除されていないことをバリデーションする
     * columnが指定されていない場合、keyNameが代わりに使用される
     * 
     * @param string $table
     * @param string|null $column
     * @param string $deletedAtColumn
     * @param string|null $message
     * @return static
     */
    public function existsNotDeleted(string $table, string $column = null, string $deletedAtColumn = "deleted_at", string $message = null): static
    {
        if (is_null($column)) $column = $this->keyName;

        return $this->addRuleObjectAndMessage("exists", Rule::exists($table, $column)->whereNull($deletedAtColumn), $message);
    }

    /**
     * パラメータがtableのcolumnに存在しないことをバリデーションする
     * columnが指定されていない場合、keyNameが代わりに使用される
     * 
     * @param string $table
     * @param string|null $column
     * @param string|null $message
     * @return static
     */
    public function unique(string $table, string $column = null, string $message = null): static
    {
        if (is_null($column)) $column = $this->keyName;

        return $this->addRuleObjectAndMessage("unique", Rule::unique($table, $column), $message);
    }

    /**
     * 論理削除されていない行の中で、パラメータがtableのcolumnに存在しないことをバリデーションする
     * columnが指定されていない場合、keyNameが代わりに使用される
     * 
     * @param string $table
     * @param string|null $column
     * @param string $deletedAtColumn
     * @param string|null $message
     * @return static
     */
    public function uniqueNotDeleted(string $table, string $column = null, string $deletedAtColumn = "deleted_at", string $message = null): static
    {
        if (is_null($column)) $column = $this->keyName;

        return $this->addRuleObjectAndMessage("unique", Rule::unique($table, $column)->whereNull($deletedAtColumn), $message);
    }



    /*----------------------------------------*
     * Additional Rules
     *----------------------------------------*/

    /**
     * パラメータがtableのIDに存在することをバリデーションする
     * 
     * @param string $table
     * @param string|null $message
     * @return static
     */
    public function id(string $table, string $message = null): static
    {
        return $this->exists($table, "id", $message);
    }
}
