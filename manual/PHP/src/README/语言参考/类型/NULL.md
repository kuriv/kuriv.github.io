# NULL

特殊的 `NULL` 值表示一个变量没有值。 `NULL` 类型只有一个值，就是不区分大小写的常量 `NULL` 。在下列情况下一个变量被认为是 `NULL` ：

```php
<?php

declare(strict_types = 1);

$foo;
$foo = null;
unset($foo);

```

