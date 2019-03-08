## 目录

* [call_user_func_array - 把第一个参数作为回调函数调用，并把一个数组参数作为回调函数的参数](#call_user_func_array)
* [call_user_func - 把第一个参数作为回调函数调用](#call_user_func)
* [forward_static_call_array - 把第一个参数作为静态函数转发调用，并把一个数组参数作为静态函数的参数](#forward_static_call_array)
* [forward_static_call - 把第一个参数作为静态函数转发调用](#forward_static_call)
* [func_get_arg - 返回参数列表的某一项](#func_get_arg)
* [func_get_args - 返回一个包含函数参数列表的数组](#func_get_args)
* [func_num_args - 返回传递给函数的参数个数](#func_num_args)
* [function_exists - 检查给定的函数是否已经被定义](#function_exists)
* [get_defined_functions - 返回所有已定义函数的数组](#get_defined_functions)
* [register_shutdown_function - 注册一个中止时执行的函数](#register_shutdown_function)
* [register_tick_function - 注册一个按要求调用的函数](#register_tick_function)
* [unregister_tick_function - 取消一个按要求调用的函数](#unregister_tick_function)



## call_user_func_array

```php
<?php

declare(strict_types = 1);

/**
 * Calculate the sum of the two numbers.
 *
 * @param  int    $a
 * @param  int    $b
 * @return int
 */
function call_user_func_array_sum_func(int $a, int $b): int
{
    return $a + $b;
}

/**
 * Calculate the difference of the two numbers.
 *
 * @param  int    $a
 * @param  int    $b
 * @return int
 */
$call_user_func_array_difference_func = function (int $a, int $b): int {
    return $a - $b;
};

class Foo
{
    /**
     * Calculate the product of the two numbers.
     *
     * @param  int    $a
     * @param  int    $b
     * @return int
     */
    public function callUserFuncArrayProductFunc(int $a, int $b): int
    {
        return $a * $b;
    }
}

class Bar
{
    /**
     * Calculate the quotient of the two numbers.
     *
     * @param  int    $a
     * @param  int    $b
     * @return int
     */
    public static function callUserFuncArrayQuotientFunc(int $a, int $b): int
    {
        return $a / $b;
    }
}

$call_user_func_array = call_user_func_array('call_user_func_array_sum_func', [1, 2]);           // $call_user_func_array = 3;
$call_user_func_array = call_user_func_array($call_user_func_array_difference_func, [2, 2]);     // $call_user_func_array = 0;
$call_user_func_array = call_user_func_array([new Foo, 'callUserFuncArrayProductFunc'], [3, 2]); // $call_user_func_array = 6;
$call_user_func_array = call_user_func_array(['Bar', 'callUserFuncArrayQuotientFunc'], [4, 2]);  // $call_user_func_array = 2;
$call_user_func_array = call_user_func_array('Bar::callUserFuncArrayQuotientFunc', [4, 2]);      // $call_user_func_array = 2;

```



## call_user_func

```php
<?php

declare(strict_types = 1);

/**
 * Calculate the sum of the two numbers.
 *
 * @param  int    $a
 * @param  int    $b
 * @return int
 */
function call_user_func_sum_func(int $a, int $b): int
{
    return $a + $b;
}

/**
 * Calculate the difference of the two numbers.
 *
 * @param  int    $a
 * @param  int    $b
 * @return int
 */
$call_user_func_difference_func = function (int $a, int $b): int {
    return $a - $b;
};

class Foo
{
    /**
     * Calculate the product of the two numbers.
     *
     * @param  int    $a
     * @param  int    $b
     * @return int
     */
    public function callUserFuncProductFunc(int $a, int $b): int
    {
        return $a * $b;
    }
}

class Bar
{
    /**
     * Calculate the quotient of the two numbers.
     *
     * @param  int    $a
     * @param  int    $b
     * @return int
     */
    public static function callUserFuncQuotientFunc(int $a, int $b): int
    {
        return $a / $b;
    }
}

$call_user_func = call_user_func('call_user_func_sum_func', 1, 2);            // $call_user_func = 3;
$call_user_func = call_user_func($call_user_func_difference_func, 2, 2);      // $call_user_func = 0;
$call_user_func = call_user_func([new Foo, 'callUserFuncProductFunc'], 3, 2); // $call_user_func = 6;
$call_user_func = call_user_func(['Bar', 'callUserFuncQuotientFunc'], 4, 2);  // $call_user_func = 2;
$call_user_func = call_user_func('Bar::callUserFuncQuotientFunc', 4, 2);      // $call_user_func = 2;

```



## forward_static_call_array

```php
<?php

declare(strict_types = 1);

/**
 * Print the args of the current method.
 *
 * @param  void
 * @return void
 */
function foo()
{
    var_dump(implode(', ', func_get_args()));
}

class Foo
{
    /**
     * Print the class name of the late static binding.
     *
     * @param  void
     * @return void
     */
    public static function printClass()
    {
        var_dump(static::class);
    }

    /**
     * Print the args of the current method.
     *
     * @param  void
     * @return void
     */
    public static function printArgs()
    {
        var_dump(implode(', ', func_get_args()));
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
    public static function test()
    {
        forward_static_call_array('foo', ['foo']);
        forward_static_call_array(['Foo', 'printClass'], ['Foo']);
        forward_static_call_array('Foo::printArgs', ['Foo', 'Bar']);
    }
}

Bar::test();

```

输出：

```
string(3) "foo"
string(3) "Bar"
string(8) "Foo, Bar"
```



## forward_static_call

```php
<?php

declare(strict_types = 1);

/**
 * Print the args of the current method.
 *
 * @param  void
 * @return void
 */
function foo()
{
    var_dump(implode(', ', func_get_args()));
}

class Foo
{
    /**
     * Print the class name of the late static binding.
     *
     * @param  void
     * @return void
     */
    public static function printClass()
    {
        var_dump(static::class);
    }

    /**
     * Print the args of the current method.
     *
     * @param  void
     * @return void
     */
    public static function printArgs()
    {
        var_dump(implode(', ', func_get_args()));
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
    public static function test()
    {
        forward_static_call('foo', 'foo');
        forward_static_call(['Foo', 'printClass'], 'Foo');
        forward_static_call('Foo::printArgs', 'Foo', 'Bar');
    }
}

Bar::test();

```

输出：

```
string(3) "foo"
string(3) "Bar"
string(8) "Foo, Bar"
```



## func_get_arg

```php
<?php

declare(strict_types = 1);

/**
 * Get an item from the argument list.
 *
 * @param  void
 * @return void
 */
function foo()
{
    $func_get_arg = func_get_arg(0); // $func_get_arg = 1;
    $func_get_arg = func_get_arg(1); // $func_get_arg = 2;
    $func_get_arg = func_get_arg(2); // $func_get_arg = 3;
}

foo(1, 2, 3);

```



## func_get_args

```php
<?php

declare(strict_types = 1);

/**
 * Get an array comprising a function's argument list.
 *
 * @param  void
 * @return void
 */
function foo()
{
    $func_get_args = func_get_args(); // $func_get_args = [0 => 1, 1 => 2, 2 => 3];
}

foo(1, 2, 3);

```



## func_num_args

```php
<?php

declare(strict_types = 1);

/**
 * Get the number of arguments passed to the function.
 *
 * @param  void
 * @return void
 */
function foo()
{
    $func_num_args = func_num_args(); // $func_num_args = 3;
}

foo(1, 2, 3);

```



## function_exists

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

$function_exists = function_exists('print');   // $function_exists = false;
$function_exists = function_exists('print_r'); // $function_exists = true;
$function_exists = function_exists('foo');     // $function_exists = true;

```



## get_defined_functions

```php
<?php

declare(strict_types = 1);

$get_defined_functions = get_defined_functions();

```



## register_shutdown_function

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

/**
 * Just a test function.
 *
 * @param  void
 * @return void
 */
$foo = function () {
};

class Foo
{
    /**
     * Just a test method.
     *
     * @param  void
     * @return void
     */
    public function test()
    {
    }
}

class Bar
{
    /**
     * Just a test method.
     *
     * @param  void
     * @return void
     */
    public static function test()
    {
    }
}

register_shutdown_function('foo');
register_shutdown_function($foo);
register_shutdown_function([new Foo, 'test']);
register_shutdown_function(['Bar', 'test']);
register_shutdown_function('Bar::test');

```



## register_tick_function

```php
<?php

declare(strict_types = 1);

declare(ticks = 1);

/**
 * Just a test function.
 *
 * @param  void
 * @return void
 */
function foo()
{
    var_dump('foo');
}

$register_tick_function = register_tick_function('foo'); // $register_tick_function = true;

$foo = 1;

if ($foo > 0) {
    $foo += 2;
}

```



## unregister_tick_function

```php
<?php

declare(strict_types = 1);

declare(ticks = 1);

/**
 * Just a test function.
 *
 * @param  void
 * @return void
 */
function foo()
{
    var_dump('foo');
}

$register_tick_function = register_tick_function('foo'); // $register_tick_function = true;

unregister_tick_function('foo');

$foo = 1;

if ($foo > 0) {
    $foo += 2;
}

```