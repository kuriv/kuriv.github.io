## Boolean 布尔类型

* [基本语法](#基本语法)
* [转换为布尔类型](#转换为布尔类型)

### 基本语法

附例一：

```php
<?php

declare(strict_types = 1);

$foo = true;
$bar = false;

```

附例二：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';
$bar = false;

if ($foo == 'foo') {
}

if ($bar) {
}

```

### 转换为布尔类型

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
