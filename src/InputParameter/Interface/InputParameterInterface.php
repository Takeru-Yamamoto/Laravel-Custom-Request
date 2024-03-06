<?php

namespace LaravelCustomRequest\InputParameter\Interface;

use LaravelCustomRequest\InputParameter\Interface\ConstructorInterface;
use LaravelCustomRequest\InputParameter\Interface\PropertyInterface;

use LaravelCustomRequest\InputParameter\Interface\RuleArrayInterface;
use LaravelCustomRequest\InputParameter\Interface\RuleBooleanInterface;
use LaravelCustomRequest\InputParameter\Interface\RuleDateInterface;
use LaravelCustomRequest\InputParameter\Interface\RuleFieldInterface;
use LaravelCustomRequest\InputParameter\Interface\RuleFileInterface;
use LaravelCustomRequest\InputParameter\Interface\RuleNecessityInterface;
use LaravelCustomRequest\InputParameter\Interface\RuleNumericInterface;
use LaravelCustomRequest\InputParameter\Interface\RuleRegexInterface;
use LaravelCustomRequest\InputParameter\Interface\RuleSizeInterface;
use LaravelCustomRequest\InputParameter\Interface\RuleStringInterface;
use LaravelCustomRequest\InputParameter\Interface\RuleTableInterface;
use LaravelCustomRequest\InputParameter\Interface\RuleValuesInterface;

/**
 * InputParameterのInterface
 * 
 * @package LaravelCustomRequest\InputParameter\Interface
 */
interface InputParameterInterface extends
    ConstructorInterface,
    PropertyInterface,
    RuleArrayInterface,
    RuleBooleanInterface,
    RuleDateInterface,
    RuleFieldInterface,
    RuleFileInterface,
    RuleNecessityInterface,
    RuleNumericInterface,
    RuleRegexInterface,
    RuleSizeInterface,
    RuleStringInterface,
    RuleTableInterface,
    RuleValuesInterface
{
}
