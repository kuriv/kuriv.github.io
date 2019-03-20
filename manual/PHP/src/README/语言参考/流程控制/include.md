## include

* [基本语法](#基本语法)

### 基本语法

附例一：

```php
<?php

declare(strict_types = 1);

include 'example.php';

```

附例二：

```php
<?php

declare(strict_types = 1);

include __DIR__ . '/example.php';

```

附例三：

```php
<?php

declare(strict_types = 1);

include __DIR__ . '/example.php';

var_dump($foo); // string(3) "foo"

```

example.php

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

```

附例四：

```php
<?php

declare(strict_types = 1);

/**
 * Just a test function.
 *
 * @param  void
 * @return string
 */
function foo(): string
{
    include __DIR__ . '/example.php';
    return $foo;
}

var_dump($foo);  // NULL
var_dump(foo()); // string(3) "foo"

```

example.php

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

```

附例五：

```php
<?php

declare(strict_types = 1);

$foo = include __DIR__ . '/foo.php';

var_dump($foo); // string(3) "foo"

$bar = include __DIR__ . '/bar.php';

var_dump($bar); // int(1)

```

foo.php

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

return $foo;

```

bar.php

```php
<?php

declare(strict_types = 1);

$bar = 'bar';

```

