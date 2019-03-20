## if

* [基本语法](#基本语法)

### 基本语法

附例一：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

if (isset($foo)) {
}

```

附例二：

```php
<?php

declare(strict_types = 1);

$foo = 'foo';

if (isset($foo)) {
    if ($foo == 'foo') {
    }
}

```

