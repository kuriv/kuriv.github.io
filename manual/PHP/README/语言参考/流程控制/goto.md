## goto

* [基本语法](#基本语法)

### 基本语法

附例一：

```php
<?php

declare(strict_types = 1);

goto bar;

var_dump('foo');

bar:
var_dump('bar'); // string(3) "bar"

```

附例二：

```php
<?php

declare(strict_types = 1);

for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        goto foo;
    }
}

foo:
var_dump('foo'); // string(3) "foo"

```

