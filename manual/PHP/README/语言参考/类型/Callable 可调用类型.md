## Callable 可调用类型

* [基本语法](#基本语法)

### 基本语法

附例一：

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

附例二：

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

附例三：

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

附例四：

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

附例五：

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

附例六：

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
     * Just a test method.
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

附例七：

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

