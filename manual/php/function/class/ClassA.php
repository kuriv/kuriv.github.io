<?php

declare(strict_types = 1);

namespace Manual;

class ClassA implements InterfaceA, InterfaceB
{
    use TraitA, TraitB;

    public $public = 'cat';
    protected $protected = 'dog';
    private $private;

    public static function getCalledClass()
    {
        return get_called_class();
    }

    public static function getStaticClass()
    {
        return static::class;
    }

    public static function getClassMethods()
    {
        return get_class_methods(static::class);
    }

    public static function publicFunc()
    {
    }

    protected static function protectedFunc()
    {
    }

    private static function privateFunc()
    {
    }

    public static function getclassVars()
    {
        return get_class_vars(static::class);
    }

    public function getClass()
    {
        return get_class($this);
    }

    public static function getParentClass()
    {
        return get_parent_class(static::class);
    }
}
