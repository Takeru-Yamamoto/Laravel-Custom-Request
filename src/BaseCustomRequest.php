<?php

namespace LaravelCustomRequest;

use Illuminate\Foundation\Http\FormRequest;

use LaravelCustomRequest\Trait\Override;

use LaravelCustomRequest\Trait\ValidateResolved;
use LaravelCustomRequest\Trait\AdditionalData;
use LaravelCustomRequest\Trait\BindValidated;

use LaravelCustomRequest\Trait\Authorize;
use LaravelCustomRequest\Trait\FailedAuthorization;

use LaravelCustomRequest\Trait\InputParameter;

use LaravelCustomRequest\Trait\LoggingParameters;

/**
 * FormRequestを継承し、使いやすく拡張した基底クラス
 * 
 * @package LaravelCustomRequest
 */
abstract class BaseCustomRequest extends FormRequest
{
    use Override;

    use ValidateResolved;
    use AdditionalData;
    use BindValidated;

    use Authorize;
    use FailedAuthorization;

    use InputParameter;

    use LoggingParameters;
}
