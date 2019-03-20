## for

* [基本语法](#基本语法)

## 基本语法

附例一：

```php
<?php

declare(strict_types = 1);

for ($i = 1; $i < 10; $i++) {
}

```

附例二：

```php
<?php

declare(strict_types = 1);

for ($i = 1;; $i++) {
    if ($i > 10) {
        break;
    }
}

```

附例三：

```php
<?php

declare(strict_types = 1);

$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    $i++;
}

```

附例四：

```php
<?php

declare(strict_types = 1);

for ($i = 1, $j = 0; $i < 10; $j += $i, print $i, $i++) {
}

// 123456789

```

附例五：

```php
<?php

declare(strict_types = 1);

$foo = [2, 4, 5];

for ($i = 0, $count = count($foo); $i < $count; $i++) {
    $foo[$i] = mt_rand();
}

```

