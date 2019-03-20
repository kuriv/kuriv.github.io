## continue

* [基本语法](#基本语法)

### 基本语法

附例一：

```php
<?php

declare(strict_types = 1);

for ($i = 1; $i < 10; $i++) {
    if ($i == 5) {
        continue 1;
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
        continue;
    }
}

```

附例三：

```php
<?php

declare(strict_types = 1);

$foo = 1;

while ($foo < 10) {
    $foo++;
    if ($foo == 5) {
        continue;
    }
}

```

附例四：

```php
<?php

declare(strict_types = 1);

$foo = 1;

do {
    $foo++;
    if ($foo == 5) {
        continue;
    }
} while ($foo < 10);

```

附例五：

```php
<?php

declare(strict_types = 1);

$foo = 1;

while ($foo++ < 10) {
    while (true) {
        while (true) {
            continue 3;
        }
    }
}

```

