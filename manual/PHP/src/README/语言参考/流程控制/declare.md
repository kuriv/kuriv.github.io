## declare

* [基本语法](#基本语法)

### 基本语法

附例一：

```php
<?php

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

register_tick_function('foo');

$foo = 1;

if ($foo > 0) {
    $foo += 2;
}

// string(3) "foo"
// string(3) "foo"
// string(3) "foo"

```

附例二：

```php
<?php

declare(strict_types = 1);

$foo = print_r('foo', 1); // PHP Fatal error:  Uncaught TypeError: print_r() expects parameter 2 to be bool, int given.

```

