## break

* [基本语法](#基本语法)

### 基本语法

附例一：

```php
<?php

declare(strict_types = 1);

for ($i = 1; $i < 10; $i++) {
    if ($i == 5) {
        break 1;
    }
}

```

附例二：

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5];

foreach ($foo as $value) {
    if ($value == 2) {
        break;
    }
}

```

附例三：

```php
<?php

declare(strict_types = 1);

$foo = 1;

while ($foo < 10) {
    if ($foo == 5) {
        break;
    }
    $foo++;
}

```

附例四：

```php
<?php

declare(strict_types = 1);

$foo = 1;

do {
    if ($foo == 5) {
        break;
    }
    $foo++;
} while ($foo < 10);

```

附例五：

```php
<?php

declare(strict_types = 1);

$foo = 1;

while ($foo++) {
    switch ($foo) {
        case 5:
            break 1;
        case 10:
            break 2;
        default:
            break;
    }
}

```

