<?php

namespace LaravelCustomRequest;

use LaravelCustomRequest\BaseCustomRequest;
use LaravelCustomRequest\Interface\PaginationRequestInterface;

use LaravelCustomRequest\Trait\Pagination;

/**
 * FormRequestを継承し、使いやすく拡張した基底クラス
 * 
 * @package LaravelCustomRequest
 */
abstract class BasePaginationRequest extends BaseCustomRequest implements PaginationRequestInterface
{
    use Pagination;
}
