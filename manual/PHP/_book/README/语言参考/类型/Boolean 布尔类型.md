## Boolean 布尔类型

要指定一个布尔类型值，使用常量 `true` 或 `false` 。两个都不区分大小写。

```php
<?php

declare(strict_types = 1);

$foo = true;
$bar = false;

```

通常运算符所返回的布尔类型值结果会被传递给流程控制。

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

if ($foo == 'foo') {
}

$bar = false;

if ($bar) {
}

```

转换为布尔类型：

```php
<?php

declare(strict_types = 1);

var_dump((bool) -10);          // bool(true)
var_dump((bool) 0);            // bool(false)
var_dump((bool) 0.0);          // bool(false)
var_dump((bool) 0.0001);       // bool(true)
var_dump((bool) 1);            // bool(true)
var_dump((bool) '');           // bool(false)
var_dump((bool) '0');          // bool(false)
var_dump((bool) '0.00');       // bool(true)
var_dump((bool) '1');          // bool(true)
var_dump((bool) 'foo');        // bool(true)
var_dump((bool) 'false');      // bool(true)
var_dump((bool) false);        // bool(false)
var_dump((bool) 2.3e5);        // bool(true)
var_dump((bool) []);           // bool(false)
var_dump((bool) [2, 4, 5]);    // bool(true)
var_dump((bool) new stdClass); // bool(true)

```
