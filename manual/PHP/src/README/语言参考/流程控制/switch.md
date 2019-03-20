## switch

* [基本语法](#基本语法)

### 基本语法

附例一：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

switch ($foo) {
    case 0:
        var_dump(0); // int(0)
        break;
    case 'foo':
        var_dump('foo');
        break;
    default:
        break;
}

```

附例二：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

switch ($foo) {
    case 0:
        var_dump(0);     // int(0)
        // no break
    case 'bar':
        var_dump('bar'); // string(3) "bar"
        // no break
    default:
        break;
}

```

附例三：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

switch ($foo) {
    case 0:
    case 'bar':
        var_dump('bar'); // string(3) "bar"
        break;
    default:
        break;
}

```

附例四：

```php
<?php

declare(strict_types = 1);

$foo = 5;

switch ($foo) {
    case 1:
        var_dump(1);
        break;
    case 2:
        var_dump(2);
        break;
    default:
        var_dump($foo); // int(5)
        break;
}

```

