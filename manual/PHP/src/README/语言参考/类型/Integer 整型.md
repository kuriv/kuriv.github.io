## Integer 整型

* [基本语法](#基本语法)
* [转换为整型](#转换为整型)

### 基本语法

```php
<?php

declare(strict_types = 1);

$foo = 10;
$foo = -10;
$foo = 010;
$foo = 0x1A;
$foo = 0b11111111;

```

### 转换为整型

```php
<?php

declare(strict_types = 1);

var_dump((int) -42);       // int(-42)
var_dump((int) 42);        // int(42)
var_dump((int) 0.0001);    // int(0)
var_dump((int) 4.2);       // int(4)
var_dump((int) '+42');     // int(42)
var_dump((int) '-42');     // int(-42)
var_dump((int) 1e7);       // int(10000000)
var_dump((int) '1e7');     // int(10000000)
var_dump((int) 0b11);      // int(3)
var_dump((int) '0b11');    // int(0)
var_dump((int) 042);       // int(34)
var_dump((int) '042');     // int(42)
var_dump((int) 0x99);      // int(153)
var_dump((int) '0x99');    // int(0)
var_dump((int) []);        // int(0)
var_dump((int) [0, 1, 2]); // int(1)

```

