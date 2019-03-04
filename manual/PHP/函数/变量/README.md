## 目录

* [boolval - 获取变量的布尔值](#boolval)
* [doubleval - 获取变量的浮点值](#doubleval)
* [empty - 检查一个变量是否为空](#empty)
* [floatval - 获取变量的浮点值](#floatval)
* [get_defined_vars - 返回由所有已定义变量所组成的数组](#get_defined_vars)
* [get_resource_type - 返回资源（resource）类型](#get_resource_type)
* [intval - 获取变量的整数值](#intval)
* [is_array - 检测变量是否是数组](#is_array)
* [is_bool - 检测变量是否是布尔型](#is_bool)
* [is_callable - 检测参数是否为合法的可调用结构](#is_callable)
* [is_countable - 检测参数是否为可计数类型](#is_countable)
* [is_double - 检测变量是否是浮点型](#is_double)
* [is_float - 检测变量是否是浮点型](#is_float)
* [is_int - 检测变量是否是整数](#is_int)
* [is_integer - 检测变量是否是整数](#is_integer)
* [is_iterable - 检测变量是否是可迭代类型](#is_iterable)
* [is_long - 检测变量是否是整数](#is_long)
* [is_null - 检测变量是否为 NULL](#is_null)
* [is_numeric - 检测变量是否为数字或数字字符串](#is_numeric)
* [is_object - 检测变量是否是一个对象](#is_object)
* [is_real - 检测变量是否是浮点型](#is_real)
* [is_resource - 检测变量是否为资源类型](#is_resource)
* [is_scalar - 检测变量是否是一个标量](#is_scalar)
* [is_string - 检测变量是否是字符串](#is_string)
* [isset - 检测变量是否已设置并且非 NULL](#isset)
* [print_r - 以易于理解的格式打印变量](#print_r)
* [serialize - 产生一个可存储的值的表示](#serialize)
* [settype - 设置变量的类型](#settype)
* [strval - 获取变量的字符串值](#strval)
* [unserialize - 从已存储的表示中创建 PHP 的值](#unserialize)
* [unset - 释放指定的变量](#unset)
* [var_dump - 打印变量的相关信息](#var_dump)
* [var_export - 输出或返回一个变量的字符串表示](#var_export)



## boolval

```php
<?php

declare(strict_types = 1);

$boolval = boolval(-10);          // $boolval = true;
$boolval = boolval(0);            // $boolval = false;
$boolval = boolval(0.0);          // $boolval = false;
$boolval = boolval(0.0001);       // $boolval = true;
$boolval = boolval('');           // $boolval = false;
$boolval = boolval('false');      // $boolval = true;
$boolval = boolval('0');          // $boolval = false;
$boolval = boolval('1');          // $boolval = true;
$boolval = boolval([]);           // $boolval = false;
$boolval = boolval([0, 1, 2]);    // $boolval = true;
$boolval = boolval(new stdClass); // $boolval = true;

```



## doubleval

```php
<?php

declare(strict_types = 1);

$doubleval = doubleval(-0.0001);        // $doubleval = -0.0001;
$doubleval = doubleval('abc122.34343'); // $doubleval = 0;
$doubleval = doubleval('122.34343abc'); // $doubleval = 122.34343;

```



## empty

```php
<?php

declare(strict_types = 1);

$empty = empty(-10);          // $empty = false;
$empty = empty(0);            // $empty = true;
$empty = empty(0.0);          // $empty = true;
$empty = empty(0.0001);       // $empty = false;
$empty = empty('');           // $empty = true;
$empty = empty('false');      // $empty = false;
$empty = empty('0');          // $empty = true;
$empty = empty('1');          // $empty = false;
$empty = empty([]);           // $empty = true;
$empty = empty([0, 1, 2]);    // $empty = false;
$empty = empty(new stdClass); // $empty = false;

```



## floatval

```php
<?php

declare(strict_types = 1);

$floatval = floatval(-0.0001);        // $floatval = -0.0001;
$floatval = floatval('abc122.34343'); // $floatval = 0;
$floatval = floatval('122.34343abc'); // $floatval = 122.34343;

```



## get_defined_vars

```php
<?php

declare(strict_types = 1);

$get_defined_vars = get_defined_vars();

```



## get_resource_type

```php
<?php

declare(strict_types = 1);

$get_resource_type = get_resource_type(tmpfile()); // $get_resource_type = 'stream';

```



## intval

```php
<?php

declare(strict_types = 1);

$intval = intval(-42);       // $intval = -42;
$intval = intval(42);        // $intval = 42;
$intval = intval(0.0001);    // $intval = 0;
$intval = intval(4.2);       // $intval = 4;
$intval = intval('+42');     // $intval = 42;
$intval = intval('-42');     // $intval = -42;
$intval = intval(1e7);       // $intval = 10000000;
$intval = intval('1e7');     // $intval = 1;
$intval = intval(0b11);      // $intval = 3;
$intval = intval('0b11');    // $intval = 0;
$intval = intval(042);       // $intval = 34;
$intval = intval('042');     // $intval = 42;
$intval = intval(0x99);      // $intval = 153;
$intval = intval('0x99');    // $intval = 0;
$intval = intval([]);        // $intval = 0;
$intval = intval([0, 1, 2]); // $intval = 1;
$intval = intval(42, 8);     // $intval = 42;
$intval = intval('42', 8);   // $intval = 34;

```



## is_array

```php
<?php

declare(strict_types = 1);

$is_array = is_array(0);                                // $is_array = false;
$is_array = is_array([0, 1, 2]);                        // $is_array = true;
$is_array = is_array(['foo' => 'cat', 'bar' => 'dog']); // $is_array = true;

```



## is_bool

```php
<?php

declare(strict_types = 1);

$is_bool = is_bool(0);     // $is_bool = false;
$is_bool = is_bool(true);  // $is_bool = true;
$is_bool = is_bool(false); // $is_bool = true;

```



## is_callable

```php
<?php

declare(strict_types = 1);

function foo()
{
}

$is_callable = is_callable('foo');                        // $is_callable = true;
$is_callable = is_callable('bar');                        // $is_callable = false;
$is_callable = is_callable('foo', false, $callable_name); // $is_callable = true; $callable_name = 'foo';
$is_callable = is_callable('bar', true, $callable_name);  // $is_callable = true; $callable_name = 'bar';

```



## is_countable

```php
<?php

declare(strict_types = 1);

$is_countable = is_countable(0);                 // $is_countable = false;
$is_countable = is_countable([]);                // $is_countable = true;
$is_countable = is_countable(new stdClass);      // $is_countable = false;
$is_countable = is_countable(new ArrayIterator); // $is_countable = true;

```

输出：



## is_double

```php
<?php

declare(strict_types = 1);

$is_double = is_double(0);     // $is_double = false;
$is_double = is_double(27.25); // $is_double = true;
$is_double = is_double(1e7);   // $is_double = true;

```



## is_float

```php
<?php

declare(strict_types = 1);

$is_float = is_float(0);     // $is_float = false;
$is_float = is_float(27.25); // $is_float = true;
$is_float = is_float(1e7);   // $is_float = true;

```



## is_int

```php
<?php

declare(strict_types = 1);

$is_int = is_int(23);   // $is_int = true;
$is_int = is_int('23'); // $is_int = false;
$is_int = is_int(23.5); // $is_int = false;

```



## is_integer

```php
<?php

declare(strict_types = 1);

$is_integer = is_integer(23);   // $is_integer = true;
$is_integer = is_integer('23'); // $is_integer = false;
$is_integer = is_integer(23.5); // $is_integer = false;

```



## is_iterable

```php
<?php

declare(strict_types = 1);

$is_iterable = is_iterable(0);                 // $is_iterable = false;
$is_iterable = is_iterable([0, 1, 2]);         // $is_iterable = true;
$is_iterable = is_iterable(new stdClass);      // $is_iterable = false;
$is_iterable = is_iterable(new ArrayIterator); // $is_iterable = true;

```



## is_long

```php
<?php

declare(strict_types = 1);

$is_long = is_long(23);   // $is_long = true;
$is_long = is_long('23'); // $is_long = false;
$is_long = is_long(23.5); // $is_long = false;

```



## is_null

```php
<?php

declare(strict_types = 1);

$is_null = is_null(null); // $is_null = true;
$is_null = is_null('');   // $is_null = false;
$is_null = is_null(0);    // $is_null = false;

```



## is_numeric

```php
<?php

declare(strict_types = 1);

$is_numeric = is_numeric(3);      // $is_numeric = true;
$is_numeric = is_numeric('3');    // $is_numeric = true;
$is_numeric = is_numeric('1.2');  // $is_numeric = true;
$is_numeric = is_numeric('1.2a'); // $is_numeric = false;

```



## is_object

```php
<?php

declare(strict_types = 1);

$is_object = is_object(null);         // $is_object = false;
$is_object = is_object([]);           // $is_object = false;
$is_object = is_object(new stdClass); // $is_object = true;

```



## is_real

```php
<?php

declare(strict_types = 1);

$is_real = is_real(0);     // $is_real = false;
$is_real = is_real(27.25); // $is_real = true;
$is_real = is_real(1e7);   // $is_real = true;

```



## is_resource

```php
<?php

declare(strict_types = 1);

$is_resource = is_resource(null);         // $is_resource = false;
$is_resource = is_resource(tmpfile());    // $is_resource = true;
$is_resource = is_resource(new stdClass); // $is_resource = false;

```



## is_scalar

```php
<?php

declare(strict_types = 1);

$is_scalar = is_scalar(0);            // $is_scalar = true;
$is_scalar = is_scalar(0.1);          // $is_scalar = true;
$is_scalar = is_scalar('0');          // $is_scalar = true;
$is_scalar = is_scalar(false);        // $is_scalar = true;
$is_scalar = is_scalar([0, 1, 2]);    // $is_scalar = false;
$is_scalar = is_scalar(new stdClass); // $is_scalar = false;
$is_scalar = is_scalar(tmpfile());    // $is_scalar = false;

```



## is_string

```php
<?php

declare(strict_types = 1);

$is_string = is_string(0);   // $is_string = false;
$is_string = is_string('');  // $is_string = true;
$is_string = is_string('0'); // $is_string = true;

```



## isset

```php
<?php

declare(strict_types = 1);

$isset = isset($foo);       // $isset = false;

$foo = null;
$isset = isset($foo);       // $isset = false;

$foo = '';
$isset = isset($foo);       // $isset = true;

$foo = 0;
$isset = isset($foo);       // $isset = true;

$bar = null;
$isset = isset($foo, $bar); // $isset = false;

$foo = '';
$bar = 0;
$isset = isset($foo, $bar); // $isset = true;

$foo = null;
$bar = 0;
$isset = isset($foo, $bar); // $isset = false;

```



## print_r

```php
<?php

declare(strict_types = 1);

print_r([0, 1, 2]);
$print_r = print_r([0, 1, 2], true); // $print_r = [0 => 0, 1 => 1, 2 => 2];

```



## serialize

```php
<?php

declare(strict_types = 1);

$serialize = serialize(0);            // $serialize = 'i:0;';
$serialize = serialize([0, 1, 2]);    // $serialize = 'a:3:{i:0;i:0;i:1;i:1;i:2;i:2;}';
$serialize = serialize(new stdClass); // $serialize = 'O:8:"stdClass":0:{}';

```



## settype

```php
<?php

declare(strict_types = 1);

$foo = 0;                            // $foo = '0';
$settype = settype($foo, 'string');  // $settype = true;

$foo = true;                         // $foo = '1';
$settype = settype($foo, 'string');  // $settype = true;

$foo = '122.34343abc';               // $foo = 122;
$settype = settype($foo, 'integer'); // $settype = true;

$foo = 'abc122.34343';               // $foo = 0;
$settype = settype($foo, 'integer'); // $settype = true;

$foo = 'true';                       // $foo = true;
$settype = settype($foo, 'bool');    // $settype = true;

$foo = 'false';                      // $foo = true;
$settype = settype($foo, 'bool');    // $settype = true;

```



## strval

```php
<?php

declare(strict_types = 1);

$strval = strval(-10);    // $strval = '-10';
$strval = strval(0);      // $strval = '0';
$strval = strval(0.0001); // $strval = '0.0001';

```



## unserialize

```php
<?php

declare(strict_types = 1);

$unserialize = unserialize('i:0;');                           // $unserialize = 0;
$unserialize = unserialize('a:3:{i:0;i:0;i:1;i:1;i:2;i:2;}'); // $unserialize = [0 => 0, 1 => 1, 2 => 2];
$unserialize = unserialize('O:8:"stdClass":0:{}');            // $unserialize = new stdClass;

```



## unset

```php
<?php

declare(strict_types = 1);

$foo = 0;            // $foo = null;
unset($foo);

$foo = [0, 1, 2];    // $foo = [1 => 1, 2 => 2];
unset($foo[0]);

$foo = new stdClass; // $foo = null;
unset($foo);

$foo = 0;            // $foo = null;
$bar = [0, 1, 2];    // $bar = null;
unset($foo, $bar);

```



## var_dump

```php
<?php

declare(strict_types = 1);

var_dump(0);
var_dump([0, 1, 2]);
var_dump(0, [0, 1, 2], new stdClass);

```



## var_export

```php
<?php

declare(strict_types = 1);

var_export([0, 1, 2]);
$var_export = var_export([0, 1, 2], true); // $var_export = [0 => 0, 1 => 1, 2 => 2];

```