<?php

namespace LaravelCustomRequest\InputParameter;

use LaravelCustomRequest\InputParameter\Interface\InputParameterInterface;

use LaravelCustomRequest\InputParameter\Trait\Constructor;
use LaravelCustomRequest\InputParameter\Trait\Property;

use LaravelCustomRequest\InputParameter\Trait\RuleArray;
use LaravelCustomRequest\InputParameter\Trait\RuleBoolean;
use LaravelCustomRequest\InputParameter\Trait\RuleDate;
use LaravelCustomRequest\InputParameter\Trait\RuleField;
use LaravelCustomRequest\InputParameter\Trait\RuleFile;
use LaravelCustomRequest\InputParameter\Trait\RuleNecessity;
use LaravelCustomRequest\InputParameter\Trait\RuleNumeric;
use LaravelCustomRequest\InputParameter\Trait\RuleRegex;
use LaravelCustomRequest\InputParameter\Trait\RuleSize;
use LaravelCustomRequest\InputParameter\Trait\RuleString;
use LaravelCustomRequest\InputParameter\Trait\RuleTable;
use LaravelCustomRequest\InputParameter\Trait\RuleValues;

/**
 * Validationで使用するruleやattribute、messagesを管理するクラス
 * 
 * @package LaravelCustomRequest\InputParameter
 */
class InputParameter implements InputParameterInterface
{
    use Constructor;
    use Property;

    use RuleArray;
    use RuleBoolean;
    use RuleDate;
    use RuleField;
    use RuleFile;
    use RuleNecessity;
    use RuleNumeric;
    use RuleRegex;
    use RuleSize;
    use RuleString;
    use RuleTable;
    use RuleValues;
}
