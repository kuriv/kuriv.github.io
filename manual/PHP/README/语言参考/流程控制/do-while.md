## do-while

* [基本语法](#基本语法)

### 基本语法

附例一：

```php
<?php

declare(strict_types = 1);

$foo = 1;

do {
    $foo++;
} while ($foo < 10);

```

附例二：

```php
<?php

declare(strict_types = 1);

do {
    $foo = 'foo';
} while (false);

var_dump($foo); // string(3) "foo"

```

