<?php

namespace LaravelCustomRequest\InputParameter\Interface;

/**
 * InputParameterのRuleTableトレイトのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface RuleTableInterface
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
    public function exists(string $table, string $column = null, string $message = null): static;

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
    public function existsNotDeleted(string $table, string $column = null, string $deletedAtColumn = "deleted_at", string $message = null): static;

    /**
     * パラメータがtableのcolumnに存在しないことをバリデーションする
     * columnが指定されていない場合、keyNameが代わりに使用される
     * 
     * @param string $table
     * @param string|null $column
     * @param string|null $message
     * @return static
     */
    public function unique(string $table, string $column = null, string $message = null): static;

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
    public function uniqueNotDeleted(string $table, string $column = null, string $deletedAtColumn = "deleted_at", string $message = null): static;

    /**
     * パラメータがtableのIDに存在することをバリデーションする
     * 
     * @param string $table
     * @param string|null $message
     * @return static
     */
    public function id(string $table, string $message = null): static;
}
