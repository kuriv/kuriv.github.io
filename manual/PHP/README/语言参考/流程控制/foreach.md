## foreach

* [基本语法](#基本语法)

### 基本语法

附例一：

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5];

foreach ($foo as $value) {
}

```

附例二：

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5];

foreach ($foo as $key => $value) {
}

```

附例三：

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5];

foreach ($foo as &$value) {
    $value += 1;
}
unset($value);

var_dump($foo); // array(3) { [0]=> int(3) [1]=> int(5) [2]=> int(6) }

```

附例四：

```php
<?php

declare(strict_types = 1);

$foo = [[2], [4], [5]];

foreach ($foo as $value) {
    foreach ($value as $v) {
    }
}

```

附例五：

```php
<?php

declare(strict_types = 1);

$foo = [['foo', 'bar'], ['baz', 'qux']];

foreach ($foo as list($a, $b)) {
}

```

