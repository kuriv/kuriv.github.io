# Callable 可调用类型

普通的用户自定义函数：

```php
<?php

declare(strict_types = 1);

/**
 * Just a test function.
 *
 * @param  void
 * @return void
 */
function foo()
{
}

call_user_func('foo');

```

匿名函数：

```php
<?php

declare(strict_types = 1);

/**
 * Just a test function.
 *
 * @param  void
 * @return void
 */
$foo = function () {
};

call_user_func($foo);

```

类中的普通方法：

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Just a test method.
     *
     * @param  void
     * @return void
     */
    public function method()
    {
    }
}

call_user_func([new Foo, 'method']);

```

类中的静态方法：

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Just a test method.
     *
     * @param  void
     * @return void
     */
    public static function method()
    {
    }
}

call_user_func(['Foo', 'method']);

```

类中的静态方法：

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Just a test method.
     *
     * @param  void
     * @return void
     */
    public static function method()
    {
    }
}

call_user_func('Foo::method');

```

父类中的静态方法：

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * Just a test method.
     *
     * @param  void
     * @return void
     */
    public static function method()
    {
    }
}

class Bar extends Foo
{
    /**
     * Override the parent method.
     *
     * @param  void
     * @return void
     */
    public static function method()
    {
    }
}

call_user_func(['Bar', 'parent::method']);

```

`__invoke()` 魔术方法：

```php
<?php

declare(strict_types = 1);

class Foo
{
    /**
     * This method is called when tries to call an object as a function.
     *
     * @param  void
     * @return void
     */
    public function __invoke()
    {
    }
}

call_user_func(new Foo);

```

