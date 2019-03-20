## return

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
 * @return int
 */
function foo(): int
{
    return 5;
}

var_dump(foo()); // int(5)

```

附例二：

```php
<?php

declare(strict_types = 1);

$foo = require __DIR__ . '/example.php';

var_dump($foo); // string(3) "foo"

```

example.php

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

return $foo;

```

