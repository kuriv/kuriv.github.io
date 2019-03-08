## 目录

* [class_alias - 为一个类创建别名](#class_alias)
* [class_exists - 检查类是否已定义](#class_exists)
* [get_called_class - 后期静态绑定（"Late Static Binding"）类的名称](#get_called_class)
* [get_class_methods - 返回由类的方法名组成的数组](#get_class_methods)
* [get_class_vars - 返回由类的默认属性组成的数组](#get_class_vars)
* [get_class - 返回对象的类名](#get_class)
* [get_declared_classes - 返回由已定义类的名字所组成的数组](#get_declared_classes)
* [get_declared_interfaces - 返回一个数组包含所有已声明的接口](#get_declared_interfaces)
* [get_declared_traits - 返回所有已定义的 traits 的数组](#get_declared_traits)
* [get_object_vars - 返回由对象属性组成的关联数组](#get_object_vars)
* [get_parent_class - 返回对象或类的父类名](#get_parent_class)
* [interface_exists - 检查接口是否已被定义](#interface_exists)
* [is_a - 如果对象属于该类或该类是此对象的父类则返回 TRUE](#is_a)
* [is_subclass_of - 如果此对象是该类的子类，则返回 TRUE](#is_subclass_of)
* [method_exists - 检查类的方法是否存在](#method_exists)
* [property_exists - 检查对象或类是否具有该属性](#property_exists)
* [trait_exists - 检查指定的 trait 是否存在](#trait_exists)



## class_alias

```php
<?php

declare(strict_types = 1);

class Foo
{
}

$class_alias = class_alias('Foo', 'ClassAlias');     // $class_alias = true;

$class_alias = new Foo == new ClassAlias;            // $class_alias = true;
$class_alias = new Foo === new ClassAlias;           // $class_alias = false;
$class_alias = new Foo instanceof Foo;               // $class_alias = true;
$class_alias = new Foo instanceof ClassAlias;        // $class_alias = true;
$class_alias = new ClassAlias instanceof Foo;        // $class_alias = true;
$class_alias = new ClassAlias instanceof ClassAlias; // $class_alias = true;

```



## class_exists

```php
<?php

declare(strict_types = 1);

class Foo
{
}

$class_exists = class_exists('stdClass'); // $class_exists = true;
$class_exists = class_exists('Foo');      // $class_exists = true;
$class_exists = class_exists('Bar');      // $class_exists = false;

```



## get_called_class

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Get the class name of the late static binding.
     *
     * @param  void
     * @return string
     */
    public static function getCalledClass(): string
    {
        return get_called_class();
    }

    /**
     * Get the class name of the late static binding.
     *
     * @param  void
     * @return string
     */
    public static function getStaticClass(): string
    {
        return static::class;
    }
}

class Bar extends Foo
{
}

$get_called_class = Foo::getCalledClass(); // $get_called_class = 'Foo';
$get_called_class = Foo::getStaticClass(); // $get_called_class = 'Foo';
$get_called_class = Bar::getCalledClass(); // $get_called_class = 'Bar';
$get_called_class = Bar::getStaticClass(); // $get_called_class = 'Bar';

```



## get_class_methods

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Return all methods of the specified class.
     *
     * @param  void
     * @return array
     */
    public static function getClassMethods(): array
    {
        return get_class_methods(static::class);
    }

    /**
     * Just a test method.
     *
     * @param  void
     * @return void
     */
    private static function test()
    {
    }
}

class Bar extends Foo
{
}

$get_class_methods = get_class_methods('Foo');   // $get_class_methods = [0 => 'getClassMethods'];
$get_class_methods = get_class_methods('Bar');   // $get_class_methods = [0 => 'getClassMethods'];
$get_class_methods = get_class_methods(new Foo); // $get_class_methods = [0 => 'getClassMethods'];
$get_class_methods = get_class_methods(new Bar); // $get_class_methods = [0 => 'getClassMethods'];
$get_class_methods = Foo::getClassMethods();     // $get_class_methods = [0 => 'getClassMethods', 1 => 'test'];
$get_class_methods = Bar::getClassMethods();     // $get_class_methods = [0 => 'getClassMethods', 1 => 'test'];

```



## get_class_vars

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Public variable.
     *
     * @var string
     */
    public $public = 'cat';

    /**
     * Protected variable.
     *
     * @var string
     */
    protected $protected = 'dog';

    /**
     * Private variable.
     *
     * @var null
     */
    private $private;

    /**
     * Returns all variables of the specified class.
     *
     * @param  void
     * @return array
     */
    public static function getclassVars(): array
    {
        return get_class_vars(static::class);
    }
}

class Bar extends Foo
{
}

$get_class_vars = get_class_vars('Foo'); // $get_class_vars = ['public' => 'cat'];
$get_class_vars = get_class_vars('Bar'); // $get_class_vars = ['public' => 'cat'];
$get_class_vars = Foo::getclassVars();   // $get_class_vars = ['public' => 'cat', 'protected' => 'dog', 'private' => NULL];
$get_class_vars = Bar::getclassVars();   // $get_class_vars = ['public' => 'cat', 'protected' => 'dog', 'private' => NULL];

```



## get_class

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Returns the class name of the current object.
     *
     * @param  void
     * @return string
     */
    public function getClass(): string
    {
        return get_class($this);
    }
}

class Bar extends Foo
{
}

$get_class = get_class(new Foo);    // $get_class = 'Foo';
$get_class = get_class(new Bar);    // $get_class = 'Bar';
$get_class = (new Foo)->getClass(); // $get_class = 'Foo';
$get_class = (new Bar)->getClass(); // $get_class = 'Bar';

```



## get_declared_classes

```php
<?php

declare(strict_types = 1);

$get_declared_classes = get_declared_classes();

```



## get_declared_interfaces

```php
<?php

declare(strict_types = 1);

$get_declared_interfaces = get_declared_interfaces();

```



## get_declared_traits

```php
<?php

declare(strict_types = 1);

$get_declared_traits = get_declared_traits();

```



## get_object_vars

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Public variable.
     *
     * @var string
     */
    public $public = 'cat';

    /**
     * Protected variable.
     *
     * @var string
     */
    protected $protected = 'dog';

    /**
     * Private variable.
     *
     * @var null
     */
    private $private;
}

class Bar extends Foo
{
}

$get_object_vars = get_object_vars(new stdClass); // $get_object_vars = [];
$get_object_vars = get_object_vars(new Foo);      // $get_object_vars = ['public' => 'cat'];
$get_object_vars = get_object_vars(new Bar);      // $get_object_vars = ['public' => 'cat'];

```



## get_parent_class

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Returns the parent class name of the object or class.
     *
     * @param  void
     * @return string
     */
    public static function getParentClass(): string
    {
        return get_parent_class(static::class);
    }
}

class Bar extends Foo
{
}

$get_parent_class = get_parent_class('Foo');   // $get_parent_class = false;
$get_parent_class = get_parent_class('Bar');   // $get_parent_class = 'Foo';
$get_parent_class = get_parent_class(new Foo); // $get_parent_class = false;
$get_parent_class = get_parent_class(new Bar); // $get_parent_class = 'Foo';
$get_parent_class = Foo::getParentClass();     // $get_parent_class = false;
$get_parent_class = Bar::getParentClass();     // $get_parent_class = 'Foo';

```



## interface_exists

```php
<?php

declare(strict_types = 1);

interface FooInterface
{
}

interface BarInterface
{
}

$interface_exists = interface_exists('Foo');          // $interface_exists = false;
$interface_exists = interface_exists('FooInterface'); // $interface_exists = true;
$interface_exists = interface_exists('BarInterface'); // $interface_exists = true;

```



## is_a

```php
<?php

declare(strict_types = 1);

class Foo
{
}

class Bar extends Foo
{
}

$is_a = is_a('Foo', 'Foo', false); // $is_a = false;
$is_a = is_a('Foo', 'Bar', false); // $is_a = false;
$is_a = is_a('Bar', 'Foo', false); // $is_a = false;
$is_a = is_a('Bar', 'Bar', false); // $is_a = false;
$is_a = is_a('Foo', 'Foo', true);  // $is_a = true;
$is_a = is_a('Foo', 'Bar', true);  // $is_a = false;
$is_a = is_a('Bar', 'Foo', true);  // $is_a = true;
$is_a = is_a('Bar', 'Bar', true);  // $is_a = true;
$is_a = is_a(new Foo, 'Foo');      // $is_a = true;
$is_a = is_a(new Foo, 'Bar');      // $is_a = false;
$is_a = is_a(new Bar, 'Foo');      // $is_a = true;
$is_a = is_a(new Bar, 'Bar');      // $is_a = true;

```



## is_subclass_of

```php
<?php

declare(strict_types = 1);

class Foo
{
}

class Bar extends Foo
{
}

$is_subclass_of = is_subclass_of('Foo', 'Foo', false); // $is_subclass_of = false;
$is_subclass_of = is_subclass_of('Foo', 'Bar', false); // $is_subclass_of = false;
$is_subclass_of = is_subclass_of('Bar', 'Foo', false); // $is_subclass_of = false;
$is_subclass_of = is_subclass_of('Bar', 'Bar', false); // $is_subclass_of = false;
$is_subclass_of = is_subclass_of('Foo', 'Foo', true);  // $is_subclass_of = false;
$is_subclass_of = is_subclass_of('Foo', 'Bar', true);  // $is_subclass_of = false;
$is_subclass_of = is_subclass_of('Bar', 'Foo', true);  // $is_subclass_of = true;
$is_subclass_of = is_subclass_of('Bar', 'Bar', true);  // $is_subclass_of = false;
$is_subclass_of = is_subclass_of(new Foo, 'Foo');      // $is_subclass_of = false;
$is_subclass_of = is_subclass_of(new Foo, 'Bar');      // $is_subclass_of = false;
$is_subclass_of = is_subclass_of(new Bar, 'Foo');      // $is_subclass_of = true;
$is_subclass_of = is_subclass_of(new Bar, 'Bar');      // $is_subclass_of = false;

```



## method_exists

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Public method.
     *
     * @param  void
     * @return void
     */
    public static function publicFunc()
    {
    }

    /**
     * Protected method.
     *
     * @param  void
     * @return void
     */
    protected static function protectedFunc()
    {
    }

    /**
     * Private method.
     *
     * @param  void
     * @return void
     */
    private static function privateFunc()
    {
    }
}

class Bar extends Foo
{
}

$method_exists = method_exists('Foo', 'publicFunc');      // $method_exists = true;
$method_exists = method_exists('Foo', 'protectedFunc');   // $method_exists = true;
$method_exists = method_exists('Foo', 'privateFunc');     // $method_exists = true;
$method_exists = method_exists('Bar', 'publicFunc');      // $method_exists = true;
$method_exists = method_exists('Bar', 'protectedFunc');   // $method_exists = true;
$method_exists = method_exists('Bar', 'privateFunc');     // $method_exists = true;
$method_exists = method_exists(new Foo, 'publicFunc');    // $method_exists = true;
$method_exists = method_exists(new Foo, 'protectedFunc'); // $method_exists = true;
$method_exists = method_exists(new Foo, 'privateFunc');   // $method_exists = true;
$method_exists = method_exists(new Bar, 'publicFunc');    // $method_exists = true;
$method_exists = method_exists(new Bar, 'protectedFunc'); // $method_exists = true;
$method_exists = method_exists(new Bar, 'privateFunc');   // $method_exists = true;

```



## property_exists

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Public variable.
     *
     * @var string
     */
    public $public = 'cat';

    /**
     * Protected variable.
     *
     * @var string
     */
    protected $protected = 'dog';

    /**
     * Private variable.
     *
     * @var null
     */
    private $private;
}

class Bar extends Foo
{
}

$property_exists = property_exists('Foo', 'public');      // $property_exists = true;
$property_exists = property_exists('Foo', 'protected');   // $property_exists = true;
$property_exists = property_exists('Foo', 'private');     // $property_exists = true;
$property_exists = property_exists('Bar', 'public');      // $property_exists = true;
$property_exists = property_exists('Bar', 'protected');   // $property_exists = true;
$property_exists = property_exists('Bar', 'private');     // $property_exists = false;
$property_exists = property_exists(new Foo, 'public');    // $property_exists = true;
$property_exists = property_exists(new Foo, 'protected'); // $property_exists = true;
$property_exists = property_exists(new Foo, 'private');   // $property_exists = true;
$property_exists = property_exists(new Bar, 'public');    // $property_exists = true;
$property_exists = property_exists(new Bar, 'protected'); // $property_exists = true;
$property_exists = property_exists(new Bar, 'private');   // $property_exists = false;

```



## trait_exists

```php
<?php

declare(strict_types = 1);

trait FooTrait
{
}

trait BarTrait
{
}

$trait_exists = trait_exists('Foo');      // $trait_exists = false;
$trait_exists = trait_exists('FooTrait'); // $trait_exists = true;
$trait_exists = trait_exists('BarTrait'); // $trait_exists = true;

```